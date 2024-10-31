<?php

class Cmodel {
    public function GetData() {
        $mysql = new mysqli('localhost', 'root', '', 'blog');

        if (mysqli_connect_errno()) {
            echo ("Соединение не установлено");
            exit();
        }

        $mysql->set_charset("utf8");

        $query = "SELECT * FROM News2";
        $result = $mysql->query($query);
        
        if ($result) {
            $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $arrayResult = [];  
        }

        $mysql->close(); 
        return $arrayResult;
    }
}



