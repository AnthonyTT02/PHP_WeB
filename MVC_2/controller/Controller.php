<?php

class Controller{



    public function StartSite(){
        include 'view/main.php';
    }

    public function BooksList(){
        $booksList = BookModel::getBooks();
        include 'view/bookList.php';
    }

    public function bookOne($title){
        
        $test = BookModel::getBook($title);
        //var_dump($test);
        if ($test[0]==true){
            
            $book = $test[0];
            include 'view/bookOne.php';
        }
        else {
            include 'view/error404.php';
        }
    }
    public function error404(){
        include 'view/error404.php';
    }

   
}
 ?>

