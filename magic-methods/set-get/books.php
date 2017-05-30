<?php

class Book{
    private $listOfBooks = [];

// $books->key = value
    function __set( $key, $value ){
       $this->listOfBooks[$key] = $value;
    }
    
    function __get( $index ){
        if (array_key_exists($index, $this->listOfBooks)) {
            return $this->listOfBooks[$index];
        }else if( $index == 'all' ){
            return $this->listOfBooks;
        }else{
            return 'Error! No Array Information';
        }
    }
}