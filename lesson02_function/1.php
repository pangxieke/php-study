<?php
/**
 * 1 定义一个加法函数 函数定义使用function
 * 2 定义一个累加函数
 * 3 系统函数pow
 * 4 函数不区分大小写
 */

/**
 * 定义一个加法函数demo，计算两个数值的和。
 *
 * @param $i 传入一个整数	如 5
 * @param $j 第二个参数，传入一个整数
 * @return mixed 两个数的和
 */
function sum($i, $j){
    $v = $i + $j;
    return $v;
}
echo sum(11, 342);
echo '<hr>';


/**
 * 求1到莫个数值的累加和
 *
 * @param int $j 第一个参数，整数
 * @return int 结果
 */
function add($j){
    $sum = 0;
    for($i =1 ;$i <= $j; $i++){
        $sum +=$i;
    }
    return $sum;
}
echo add(100);
echo '<hr>';

//指数表达式,return 一个值
echo pow(2, 4);
echo '<hr>';

//函数不区分大小写
echo ADD(44);



