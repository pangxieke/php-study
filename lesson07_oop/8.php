<?php
/**
 * 自动加载
 * include include_once
 * require require_once
 * include 引用外部文件
 * include_one 引用外部文件，并检查是否重复引用，
 * require 引用外部文件，失败后，不再执行后面的代码
 * require_one 同理
 */

//版本V1
include_once './A.php';
require './B.php';
$obj=new B();
var_dump($obj);

echo '<hr>';


//版本V2
//检测是否存在某一个类，如未引用，调用自定义load()函数,include类
if(class_exists('A')){
    echo 'yes';
}else{
    echo 'no';

    load('A');
}

echo '<br>';
var_dump(new A());

function load($className){
    include './'.$className.'.php';
}
echo '<hr>';


//版本V3
//使用 __autoload()函数做类的自动加载

var_dump(new A()); //new时，会检测对象是否存在，不存在时，会自动调用__autoload()函数
//var_dump(new B());

//当php检测到没有某一个类时，就会自动将类名
//传入此函数
function __autoload($className){

    include './'.$className.'.php';
}