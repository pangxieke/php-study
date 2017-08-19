<?php
/**
 * each 的使用
 * 数组指针
 */

$assoc['girl1'] = 'LILI Chen';
$assoc['girl2'] = 'YaoYao Wang';
$assoc['girl3'] = 'ManTing Meng';
$assoc['girl4'] = 'XuYun Huang';
$assoc['girl5'] = 'LiYan Zhen';
$assoc['girl6'] = 'FangFang Wu';
$assoc['girl7'] = 'Yue Pen';
$assoc['girl8'] = 'Dan Pen';
$assoc['girl9'] = 'SiSi Zhu';
$assoc['girl10'] = 'Dan Chen';

$arr = $assoc;

echo '<pre>';
print_r(each($arr));
echo '</pre>';
$c = each($arr);

echo '<hr>';
echo $c[0];
echo $c['key'];
echo '<br>';
echo $c[1];
echo $c['value'];

echo '<hr>';


echo '<pre>';
print_r(each($arr));
echo '</pre>';

echo '<pre>';
print_r(end($arr));
echo '</pre>';

each($arr);			//当前为end，再后移一位
echo '<pre>';
var_dump(each($arr));	//已经没有元素，返回false
echo '</pre>';

reset($arr);			//还回开头
echo '<pre>';
print_r(each($arr));	//输出第一个，同时指针指向第二个
echo '</pre>';

echo current($arr). '<br>';		//输出第二个指针的值
echo key($arr);					//输出当前key

var_dump(next($arr));

