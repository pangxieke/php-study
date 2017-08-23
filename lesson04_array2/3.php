<?php
//$GLOBALS

$a = 10;
$b = 20;
echo '<pre>';
print_r($GLOBALS);			//全局数组
echo '</pre>';

echo $GLOBALS['a'] . '<br>'	;

function sum(){
    return $GLOBALS['a'] + $GLOBALS['b'];	//全局数组可以在函数内部直接调用。变量直接存储值在$GLOBALS数组中
}
echo sum();