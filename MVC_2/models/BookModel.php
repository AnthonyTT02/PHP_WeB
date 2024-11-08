<?php

class BookModel {
    public function getBooks() {
        
        $mysql = new mysqli('localhost', 'root', '', 'gamesarray');

        if ($mysql->connect_errno) {
            echo "Соединение не установлено";
            exit();
        }

        $mysql->set_charset("utf8");

        
        $query = "SELECT * FROM games";
        $result = $mysql->query($query);
        
        if ($result) {
            $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $arrayResult = [];  
        }

        $mysql->close(); 
        return $arrayResult;
    }

    public function getBook($title) {
        
        $mysql = new mysqli('localhost', 'root', '', 'gamesarray');

        if ($mysql->connect_errno) {
            echo "Соединение не установлено";
            exit();
        }

        $mysql->set_charset("utf8");

        
        $query = "SELECT * FROM games where gamename = '$title'";
        // echo $query;
        // die();
        $result = $mysql->query($query);
        
        if ($result) {
            $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $arrayResult = [];  
        }

        $mysql->close(); 
        //var_dump($arrayResult);
        
        
        return $arrayResult;
    }
}
