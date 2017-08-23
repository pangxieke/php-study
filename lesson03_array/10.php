<?php
//指针遍历数组
$arr= array('a' => 's06', 's01', 's02', 's03', 's04');

echo current($arr);				//当前指针内容
echo next($arr);				//下一个指针的内容
echo end($arr);					//最后一个指针的内容
var_dump( next($arr));			//最后一位指针下移，返回false
var_dump( key($arr));			//返回NULL
var_dump(current($arr));		//内容返回false
echo '<hr>';
var_dump(prev($arr));			//指针上移仍然false
var_dump(end($arr));			//end可以将指针跳转到队尾
var_dump( reset($arr));			//reset可以将跳转到队首
var_dump( key($arr));			//获得当前指针的键名
