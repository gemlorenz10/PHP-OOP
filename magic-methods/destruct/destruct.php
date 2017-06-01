<?php
class Counter{
public $number;

function __construct( $num ){
    $this->number = $num;
    $this->counter();
}

function __destruct(){
    echo 'Counter finished.<br>';
}

function counter(){
    for( $a = 0; $a <= $this->number; $a++ ){
        echo 'Count is ' . $a . '<br>';
    }
}
}

class RevCounter extends Counter{
    
    function __construct( $num ){
        $this->number = $num;
        $this->RevCounter();
    }


    function __destruct(){
        parent::__destruct();
        echo 'RevCounter Finished.<br>';
    }

    function RevCounter(){
        for( $a = $this->number; $a > 0; $a-- ){
            echo 'Count is ' . $a . '<br>';
        }
    }
}