<?php
/**
 * number_format 格式化
 * time() 获取当前时间戳
 * date() 格式化时间
 * md5() 加密函数 参数唯一hash值
 */

$arr = 1234567;
echo number_format( $arr,4) . '<br>';
echo number_format( $arr,4 , '.', '*'). '<br>';
echo number_format( $arr, 2, '*', '$');
echo '<hr>';


echo date('Y-m-d H:i:s');
echo '当前时间戳是：' . time() . '<br>';
echo '<hr>';

$pas = '12345678';
echo $pas . '加密为:' . md5($pas) . '<br>';

$ayy= str_pad($pas, 20, time(), STR_PAD_RIGHT);	//在右边填充一个时间函数
echo md5($ayy);			//md5加密