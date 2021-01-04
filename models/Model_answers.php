<?php

class Model_answers extends Model_Base
{
    public $id, $user_id, $question_id;
    public $text, $date_of_create;

    public function fieldsTable()
    {
        return array(
            'id' => 'Id',
            'user_id' => 'user_id',
            'question_id' => 'question_id',
            'text' => 'text',
            'date_of_create' => 'date_of_create',
        );
    }

    // запись в базу данных
    public function SaveNewAnswer()
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
            $stmt->bind_param("iiss", $user_id, $question_id, $text, $date_of_create);
            $user_id = $arrayData[0];
            $question_id = $arrayData[1];
            $text = $arrayData[2];
            $date_of_create = $arrayData[3];
            $result = $stmt->execute();
        } catch (Exception $e) {
            echo 'Error : ' . $e->getMessage();
            echo '<br/>Error sql : ' . "'INSERT INTO $this->table ($forQueryFields) values ($forQueryPlace)'";
            exit();
        }
        return $result;
    }
}
