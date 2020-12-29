<?php


class ModelQuestions
{

    public static function getQuestionsList()
    {
        $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

        $questionsList = array();
        //вывести последние 10 записей из бд
        $result = mysqli_query($connect, "SELECT `id`, `title`, `author`, `date`, `content`
                    FROM `questions`
                    ORDER BY `date` DESC
                    LIMIT 10");

        $i = 0;
        while ($row = $result->fetch_row()) {
            $questionsList[$i]['id'] = $row['id'];
            $questionsList[$i]['title'] = $row['title'];
            $questionsList[$i]['author'] = $row['author'];
            $questionsList[$i]['date'] = $row['date'];
            $questionsList[$i]['content'] = $row['content'];
            $i++;
        }

        return $questionsList;
    }
}
