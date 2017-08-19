<?php
/**
 * 变量函数
 * 回调函数
 */

/**
 * 变量函数
 */
function demo($i,$j){
    echo $i +$j;
}
$a = 'demo';
echo $a(2, 5);


/**
 * 回调函数 变量函数
 *
 * @param $num
 * @param $fn
 */
function test($num, $fn){
    for($i = 0; $i <$num; $i++){
        if ($fn($i)){echo $i.'<br>';}
    }
}
function one($num){
    return( $num%2 ==0);


}

test(10,'one'); //test($num=10,$fn=$one);test($num=10,$fn=one($num))



