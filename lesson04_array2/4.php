<?php
/**
    数组的键值操作函数
    array_values();		//return array	对数组从新给予数字键值
    array_key();		//return array	取得数组的键值形成数组，3个参数。第3个参数，默认false，默认模糊搜索
    in_array();			//return bool	判断是否在数组中有这个键值。第一个变量，第二个数组，第三个bool。
    array_search();
    array_key_exists();	//
    array_flip();
    array_reverse();
 */

$arr= array(
    'a' => 111,
    'b' => 'blue',
    'c' => 'green',
    'd' => 'yellow',
    'e' => 'orange',
    'f' => 'gold'
);
echo '<pre>';
print_r(array_values($arr));
echo '</pre>';
echo '<hr>';


echo '<pre>';
print_r(array_keys($arr,'111',true));	//返回数组，可以只用一个参数，返回全部键值。
echo '</pre>';
echo '<hr>';

var_dump(in_array('blue',$arr,false));	//字符串区分大小写，无论第三个参数是否true，false
var_dump(in_array('gold',$arr));
echo '<hr>';

var_dump( array_key_exists('g',$arr));	//同in_a'ray

echo '<pre>';
print_r(array_flip($arr));			//键值反转
echo '</pre>';

echo '<pre>';
print_r(array_reverse($arr));		//前后顺序翻转
echo '</pre>';

