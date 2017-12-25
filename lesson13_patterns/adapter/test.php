<?php

function __autoload($className){
    require_once $className . '.php';
}

$obj = new AudioPlayer();
$obj->play('新年好', 'mp4');
$obj->play('good', 'mp3');