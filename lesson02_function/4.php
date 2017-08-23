<?php
/**
 * 变量的作用域
 * 函数内变量不会影响到函数内变量
 * 想在函数内使用外部变量，使用global 关键字
 */

$a = 10;
function demo($a){
    $a=200;

}
echo $a;	// output 10
echo '<hr>';

function test($a){
    //global $a=300;	//此种定义全局变量错误，要先定义，再赋值
    global $a;
    $a = 400;
}

echo $a;			//还是输出 10 	因为函数未调用，所以函数没有运行。
echo '<hr>';
test(3);			//函数未传参数，会警告，但还可以运行
echo $a;

