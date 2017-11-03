<?php
/**
 * 对象的引用传递
 */
class A{
    public $num=6;
}

$obj1 = new A();

$obj2 = $obj1;

$obj2->num=7;

echo $obj1->num;

/**
 * 知识点2 使用可变变量实例化对象
 */

class B{

}

class C{

}
$name = 'A'; //B, C
$obj3 = new $name();
var_dump($obj3);

//结合自动加载__autoload,可以分方便的调用对象