<?php

require 'books.php';

$books = new Book();

//in __set() prespective
//$books->key = 'value'

//__set and __get method
$books->book10 = 'Physics';
$books->book11 = 'Math';

 echo '<pre>' . json_encode($books->all);