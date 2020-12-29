<?php

class Model_Users extends Model_Base
{

    public $id, $email, $first_name, $last_name;
    public $about, $date_of_reg, $password, $settings;

    public function fieldsTable()
    {

        return array(
            'id' => 'Id',
            'email' => 'email',
            'login' => 'login',
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'about' => 'about',
            'date_of_reg' => 'date_of_reg',
            'password' => 'password',
            'settings' => 'settings',
        );
    }

    // запись в базу данных
    public function SaveNewUser()
    {
        $arrayAllFields = array_keys($this->fieldsTable());
        $arraySetFields = array();
        $arrayData = array();
        foreach ($arrayAllFields as $field) {
            if (!empty($this->$field)) {
                $arraySetFields[] = $field;
                $arrayData[] = $this->$field;
            }
        }
        $forQueryFields = implode(', ', $arraySetFields);
        $rangePlace = array_fill(0, count($arraySetFields), '?');
        $forQueryPlace = implode(', ', $rangePlace);

        try {
            $db = $this->db;
            $stmt = $db->prepare("INSERT INTO $this->table ($forQueryFields) values ($forQueryPlace)");
            $stmt->bind_param("ssss", $email, $login, $date_of_reg, $password);
            $email = $arrayData[0];
            $login = $arrayData[1];
            $date_of_reg = $arrayData[2];
            $password = $arrayData[3];
            $result = $stmt->execute();
        } catch (Exception $e) {
            echo 'Error : ' . $e->getMessage();
            echo '<br/>Error sql : ' . "'INSERT INTO $this->table ($forQueryFields) values ($forQueryPlace)'";
            exit();
        }

        return $result;
    }


}