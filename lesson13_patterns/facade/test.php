<?php
/**
 * 外观模式
 * 把系统中类的调用委托给一个单独的类，对外隐藏了内部的复杂性
 */

require_once './AnimalMaker.php';
$obj = new AnimalMaker();

$obj->produceChicken();
$obj->productPig();