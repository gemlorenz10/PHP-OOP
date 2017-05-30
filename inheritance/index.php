<?php
require 'bird.php';
require 'pigeon.php';

$pigeon = new Pigeon(true, 2);

if( $pigeon->canFly() ){
    echo 'Can fly.<br>';
}else{
    echo 'Can\'t fly.<br>';
}
echo 'Leg Count: ' . $pigeon->getLegCount();