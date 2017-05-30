<?php
class Book{
    public $title;
    public $price;

    function __construct($title, $price){
        
        $this->title = $title;
        $this->price = $price;
        echo 'Parent Constructor';
    }

    protected function test(){
        echo 'function test';
    }

}//end of class book
//also you can call parent constructor

class Dictionary extends Book{

    function __construct(){
        parent::__construct();
        parent::test();
    }

}