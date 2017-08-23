<?php
/**
 * 可变参数长度的函数
 */

/**
 * @return array
 */
function a(){
    $arr = func_get_args();	//返回当前参数的数组，
    return $arr;
}

/**
 * 循环输出函数输入的参数,$b可以对参数进行累加
 */
function demo(){
    $arr = func_get_args();
    $num = func_num_args();
    for ($i=0; $i < $num;$i++){
        echo $arr[$i].'<br>';

    }
    for ($i=0; $i < $num;$i++){
        global $b;
        $b += $arr[$i].'<br>';
    }
}

$s=a(1,5);
echo '<pre>';
print_r($s);
echo '</pre>';

demo(2,4,5,6);
echo $b;    //global 变量


