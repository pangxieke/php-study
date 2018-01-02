<?php
function autoload($classname)
{
    require_once $classname . '.php';
}

spl_autoload_register('autoload');

//获取单例
$instance = Singleton::getInstance();
$instance->test();

// clone对象试试
$instanceClone = clone $instance;