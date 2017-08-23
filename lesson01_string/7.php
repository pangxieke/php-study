<?php
/**
 * while 3个条件
 * 初值
 * 条件判断
 * 条件更改
 */

$a= 1 ;
while($a < 10){
    echo $a.'<br>';
    $a++;
}
echo '<hr>';


/*
 * 和 if 语句一样，可以在 while 循环中用花括号括起一个语句组，或者用替代语法：
 */
$b = 1;
while ($b < 10):
    echo $b . '<br>';
    $b ++;
endwhile;
echo '<hr>';


/**
 * 输入如下信息
 * *
 *  *
 *  *  *
 *  *  *  *
 *  *  *  *  *
 */
$i=1;
while($i<=5):

    $j=1;
    while($j<=$i):
        echo"*&nbsp&nbsp";
        $j++;
    endwhile;

    echo"<br>";
    $i++;
endwhile;
echo '<hr>';


/**
 * do while
 * 先执行do，故至少执行一次
 */
$i = 0;
do{
    $i ++;
    echo $i . '<br>';
}while($i < 5);