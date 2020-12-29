<?php

class Model_Questions extends Model_Base
{
    public $id, $user_id, $title;
    public $tags, $body, $date_of_create;

    public function fieldsTable()
    {

        return array(
            'id' => 'Id',
            'user_id' => 'user_id',
            'title' => 'title',
            'tags' => 'tags',
            'body' => 'body',
            'date_of_create' => 'date_of_create',
        );
    }

    // запись в базу данных
    public function SaveNewQuestion()
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
            $stmt->bind_param("issss", $user_id, $title, $tags, $body, $date_of_create);
            $user_id = $arrayData[0];
            $title = $arrayData[1];
            $tags = $arrayData[2];
            $body = $arrayData[3];
            $date_of_create = $arrayData[4];
            $result = $stmt->execute();
        } catch (Exception $e) {
            echo 'Error : ' . $e->getMessage();
            echo '<br/>Error sql : ' . "'INSERT INTO $this->table ($forQueryFields) values ($forQueryPlace)'";
            exit();
        }

        return $result;
    }

}
