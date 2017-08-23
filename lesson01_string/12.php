<?php
/*
 * 使用for、while、do…while循环分别做出两种九九乘法表格的输出
 */

// for 正常输出
for($i = 1; $i <10; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "$i*$j=" . ($i * $j) . '&nbsp;&nbsp;&nbsp';
    }
    echo '<br>';
}
echo '<br>';

//for 倒序99表
for($i = 9; $i >0 ; $i--){
    for($j = $i; $j > 0; $j--){
        echo "$i*$j=" . ($i * $j) . '&nbsp;&nbsp;&nbsp';
    }
    echo '<br>';
}
echo '<hr>';

// while 99
$i = 1;
while($i < 10){
    $j = 1;
    while($j <= $i){
        echo "$i*$j=" . ($i * $j) . '&nbsp;&nbsp;&nbsp';
        $j++;
    }
    $i++;
    echo '<br>';
}
echo '<br>';

// while 倒序99
$i = 9;
while( $i > 1){
    $j = $i;
    while($j > 0){
        echo "$i*$j=" . ($i * $j) . '&nbsp;&nbsp;&nbsp';
        $j--;
    }
    $i--;
    echo '<br>';
}
echo '<hr>';

// do while
$i=1;
do{
    $j = 1;
    do{
        echo "$i*$j=" . ($i * $j) . '&nbsp;&nbsp;&nbsp';
        $j++;
    }
    while($j <= $i);
    $i++;
    echo '<br>';
}while($i < 10);
echo '<br>';

//do while 倒序
$i = 9;
do{
    $j = $i;
    do{
        echo "$i*$j=" . ($i * $j) . '&nbsp;&nbsp;&nbsp';
        $j --;
    }
    while($j > 0);
    $i--;
    echo '<br>';
}while($i > 0);