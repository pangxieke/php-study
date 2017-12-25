<?php
require_once './Builder.php';

$config = [
    'color' => 'red',
    'size' => 'plus',
];

$pro = new Builder('phone', $config);

echo '<pre>';
var_dump($pro);