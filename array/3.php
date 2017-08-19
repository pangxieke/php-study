<?php
/**
 * 	知识点
 *	数组的两个声明方式
 *	索引数组，关联数组
 *	数组元素的重新赋值，销毁
*/

$arr=array(1,2,4,5,'key'=>4,2,5);	//使用array声明，可以直接给键名
$ayy[]='array_count_values';	//直接赋值声明
$ayy[]='array_rand';
$ayy[]='array_unique';
$ayy[9]='sort';
$ayy[]='print';					//按最大数组键值累加
echo '<pre>';
print_r($arr);
var_dump($ayy);
echo '</pre>'.'<hr>';


//索引数组
$girl = array ('play', 'hard');	//原来数组消失，重新定义变量，可以不加单引号
$girl['like'] = 'read';
$girl['home'] = 'shanghai';
$girl['work'] = 'teach';
$girl['age'] = '18';
//$girl = array ('play', hard);	//原来数组消失，重新定义变量,重新赋值。
echo '<pre>';
print_r($girl);
var_dump($girl[0],$girl[1]);
echo '</pre>';
echo $girl['like'] ;
define('like','play boy');		//定义常量 like
var_dump(like);
var_dump( $girl['like']) ;		//	string(4) "read"
var_dump( $girl['like']) ;		//不加单引号，当做常量解析，输出NULL
unset ($girl['like']) ;
var_dump( $girl['like']) ;		//输出NULl，数组元素销毁 会产生notice错误 Notice: Undefined index: like

?>