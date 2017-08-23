<?php
/**
 * 数组声明
 * 数组声明多种方式
 */

//1. 使用array声明数组
$arr = array();

//2. 使用[]声明数组
$arr = [];

//	键名可以为NULL，同''
$arr=array('', 'keye'=>'hard',  NULL=>'work',''=>'play', 'name'=>'pangxieke');	//必须使用array声明
asort($arr);
var_dump($arr);
echo '<hr>';
var_dump($arr['keye']);				//输出数组的值
define('keye','my name is pangxieke');
var_dump($arr['keye']);				//不加'',输出NULL
