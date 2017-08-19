<?php
//	使用for和while循环分别输出1到50的偶数值，并计算所有的偶数和。

//for循环输出1到50的偶数值，并计算所有的偶数和

for($i = 1;$i <= 50 ; $i++){
    if ($i%2 == 0){
        echo $i . '&nbsp;&nbsp;';
    }
    else{
        continue;
    }
    $c += $i;
}
echo '<hr>';
echo $c;

echo '<br>'.'<hr>';

// while
$i = 1;
while( $i <= 50 ){

    if ($i%2 == 0){
        echo $i . '&nbsp;&nbsp;';
        $d += $i;
    }
    // else{
    // continue;
    // }
    $i ++;
}
echo '<hr>';
echo $d;
	