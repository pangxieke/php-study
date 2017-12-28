<?php
/**
 * 迭代器模式
 * 理解：遍历对象内部的属性，无需对外暴露内部的构成
 */

function autoload($classname)
{
    require_once $classname . '.php';
}

spl_autoload_register('autoload');

$experimental = new School();
$experimental->addTeacher('Griffin');
$experimental->addTeacher('Curry');
$experimental->addTeacher('Mc');
$experimental->addTeacher('Kobe');
$experimental->addTeacher('Rose');
$experimental->addTeacher('Kd');

// 获取教师迭代器
$iterator = $experimental->getIterator();
// 打印所有老师
do{
    echo $iterator->current() . '<br>';
}while($iterator->hasNext());