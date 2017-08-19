<?php
/**
 * 判定语句if
 * if(): endif;
 * if(){}
 * if() 省略大括号
 * if() else()
 * if()else if() else()
 */

if(1 > 0):
    echo "这是一个真理，不会被掩盖<br>";
endif;

if(2 > 0){							//花括号，可以多条语句
    echo "让你显示就显示<br>";
    echo "多条语句同样输出<br>";
}

$a='crab';
if($a == 'pangxieke') echo "$a 让你显示就显示<br>";		//输出一空行
echo "多条语句输出一条<br>";

$hw="iffice-work";
if($a == "pangxieke"){
    echo "$a homework<br>";
}else{
    echo "this not is pangxieke's homework<br>";
}

echo "<hr>";

if($a == "pangxieke"){
    echo "$a homework<br>";
}else if($hw == "iffice-work"){
    echo "this is a $hw<br>";
}else{
    echo "this is nothing<br>";
}