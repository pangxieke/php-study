<?php
/**
    统计函数个数及唯一性
    count()
    sizeof()
    array_count_values()
    array_unique()
 */

$a = array(3, 4, 5, 6,array( array(2, 3), 5), 7,6);
$arr = array(2, ''=> 4, 5, 6,6,'key'=>4);
$stu = array('men', 'women', 'men', 'men');
echo count($a,1) . '<br>';
echo sizeof($a) . '<br>';


print_r(array_count_values($stu));
echo '<hr>';
print_r(array_count_values($a));		//只能统计一维数组，二维会警告
echo '<hr>';
print_r(array_unique($arr));			//键名保留第一个遇到的键名
