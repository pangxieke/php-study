<?php
// 	多维数组，多维数组的2中声明，访问

$arr=array(								//多维数组，直接用array声明，结尾加；
    array('id','name','sex','age'),
    array('school','class'),
    aaa,								//多维数组内含一位数组
);
//print_r($arr);
echo '<pre>';
print_r($arr);
echo '</pre>'.'<hr>';
echo $arr[0][2];	//多维数组的输出，访问

$b=array(				//竖着输入，也是数组
    2,
    5,
    6,
    8
);
print_r($b);

$ayy[name][age]='16';			//多维数组，直接赋值声明
$ayy[school][sh]='s06';
$ayy[work]='student';			//声明一个work元素
echo '<pre>';
print_r($ayy);
echo '</pre>';
?>