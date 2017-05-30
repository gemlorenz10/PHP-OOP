<?php
require 'book.php';

//$physics = new Book( "Physics for High School", 10 );
$physics = new Book('Physics is hell', 100);

echo $physics->title . '<br>';

echo 'Price: ' .$physics->price;