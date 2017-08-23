<?php
/**
 * 去空格函数
 * ltrim	rtrim	trim	str_pad
 */

$arr = " \t \t \tthis is\n a nvery good girl \t \t \tss ";
$arr2 ="535\t \t \5353tthis is\n a nvery good    girl\t\t\tss453453";
echo ltrim($arr) .'<br>';
echo strlen($arr);
echo rtrim($arr2) .'<br>';
echo strlen($arr2);
echo trim($arr2, "0..9");	//去除2遍的小写字母
echo "\535";
echo "\535";
echo '<hr>';

$str = "pangxieke";
echo str_pad($str, 20, '**', STR_PAD_LEFT);	//填充