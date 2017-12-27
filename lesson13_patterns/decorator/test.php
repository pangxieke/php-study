<?php
require_once './Shoes.php';
require_once './DecoratorBand.php';

$shoes = new Shoes();
$shoes->product();

echo '<br>-----<br>';
$decorator = new DecoratorBand($shoes);
$decorator->band = 'pangxie';
$decorator->product();