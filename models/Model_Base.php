<?php

abstract class Model_Base
{
    protected $db;
    protected $table;
    private $dataResult;

    public function __construct($select = false)
    {
        // объект бд коннекта
        global $connect;
        $this->db = $connect;

        // имя таблицы
        $modelName = get_class($this);
        $arrExp = explode('_', $modelName);
        $tableName = strtolower($arrExp[1]);
        $this->table = $tableName;

        // обработка запроса, если нужно
        $sql = $this->_getSelect($select);
        if ($sql) $this->_getResult("SELECT * FROM $this->table" . $sql);
    }

    // получить имя таблицы
    public function getTableName()
    {
        return $this->table;
    }

    // получить все записи
    function getAllRows()
    {
        if (!isset($this->dataResult) or empty($this->dataResult)) return false;
        $result = $this->dataResult->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    // получить одну запись
    function getOneRow()
    {
        if (!isset($this->dataResult) or empty($this->dataResult)) return false;
        $result = $this->dataResult->fetch_array(MYSQLI_ASSOC);
        return $result;
    }

    // извлечь из базы данных одну запись
    function fetchOne()
    {
        if (!isset($this->dataResult) or empty($this->dataResult)) return false;
        $this->dataResult = $this->dataResult->fetch_all(MYSQLI_ASSOC);
        foreach ($this->dataResult[0] as $key => $val) {
            $this->$key = $val;
        }
        return true;
    }

    // получить запись по id
    function getRowById($id)
    {
        try {
            $db = $this->db;
            $stmt = $db->query("SELECT * from $this->table WHERE id = $id");
            $row = $stmt->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
        return $row;
    }

    //Обновление записи
    public function Update()
    {
        $arrayAllFields = array_keys($this->fieldsTable());
        $arrayForSet = array();
        foreach ($arrayAllFields as $field) {
            if (!empty($this->$field)) {
                if (strtoupper($field) != 'ID') {
                    $arrayForSet[] = $field . ' = "' . $this->$field . '"';
                } else {
                    $whereID = $this->$field;
                }
            }
        }
        if (!isset($arrayForSet) or empty($arrayForSet)) {
            echo "Array data table `$this->table` empty!";
            exit;
        }
        if (!isset($whereID) or empty($whereID)) {
            echo "ID table `$this->table` not found!";
            exit;
        }
        $strForSet = implode(', ', $arrayForSet);
        try {
            $db = $this->db;
            $stmt = $db->prepare("UPDATE $this->table SET $strForSet WHERE `id` = $whereID");
            $result = $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            echo '<br/>Error sql : ' . "'UPDATE $this->table SET $strForSet WHERE `id` = $whereID'";
            exit();
        }
        return $result;
    }

    // составление запроса к базе данных
    private function _getSelect($select)
    {
        if (is_array($select)) {
            $allQuery = array_keys($select);
            array_walk($allQuery, function (&$val) {
                $val = strtoupper($val);
            });

            $querySql = "";
            if (in_array("WHERE", $allQuery)) {
                foreach ($select as $key => $val) {
                    if (strtoupper($key) == "WHERE") {
                        $querySql .= " WHERE " . $val;
                    }
                }
            }

            if (in_array("GROUP", $allQuery)) {
                foreach ($select as $key => $val) {
                    if (strtoupper($key) == "GROUP") {
                        $querySql .= " GROUP BY " . $val;
                    }
                }
            }

            if (in_array("ORDER", $allQuery)) {
                foreach ($select as $key => $val) {
                    if (strtoupper($key) == "ORDER") {
                        $querySql .= " ORDER BY " . $val;
                    }
                }
            }

            if (in_array("LIMIT", $allQuery)) {
                foreach ($select as $key => $val) {
                    if (strtoupper($key) == "LIMIT") {
                        $querySql .= " LIMIT " . $val;
                    }
                }
            }

            return $querySql;
        }
        return false;
    }

    // выполнение запроса к базе данных
    private function _getResult($sql)
    {
        try {
            $db = $this->db;
            $stmt = $db->query($sql);
            $this->dataResult = $stmt;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }

        return $this->dataResult;
    }

    // уделение записей из базы данных по условию
    public function deleteBySelect($select)
    {
        $sql = $this->_getSelect($select);
        try {
            $db = $this->db;
            $result = $db->exec("DELETE FROM $this->table " . $sql);
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            echo '<br/>Error sql : ' . "'DELETE FROM $this->table " . $sql . "'";
            exit();
        }
        return $result;
    }

    // уделение строки из базы данных
    public function deleteRow()
    {
        $arrayAllFields = array_keys($this->fieldsTable());
        array_walk($arrayAllFields, function (&$val) {
            $val = strtoupper($val);
        });
        if (in_array('ID', $arrayAllFields)) {
            try {
                $db = $this->db;
                $result = $db->exec("DELETE FROM $this->table WHERE `id` = $this->id");
                foreach ($arrayAllFields as $one) {
                    unset($this->$one);
                }
            } catch (PDOException $e) {
                echo 'Error : ' . $e->getMessage();
                echo '<br/>Error sql : ' . "'DELETE FROM $this->table WHERE `id` = $this->id'";
                exit();
            }
        } else {
            echo "ID table `$this->table` not found!";
            exit;
        }
        return $result;
    }
}
