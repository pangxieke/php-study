<?php
/**
 * 静态变量static
 * 参数引用传递 使用&
 */

//静态变量static, 引用传参数
$a = 3;			    //函数不会传递到函数内，所以这样定义初始值无效
function demo($a){	//输出为0,静态变量无法传递参数
    $a = 5;			//static
    static $a;		//这样定义时，初始值5也无法传递给$a,此时$a不存在,为null。
    $a++;			// 此时$a为null，++后变为0， 只能 static $a=5; 这样调用。同global刚好相反。
    return $a;
}
echo @demo() . '<br>';	// 输出 1
echo @demo() . '<br>';	// 输出 2

/**
 * @param $em  使用& 传递引用
 */
function test(&$em){
    echo $em = 6 ;
}
$a = 5;
test($a);
echo $a;	//传参数，输出6
echo '<br>';

$str = ' * ';
$new = str_repeat($str , 12);   //str_repeat 重复
echo $new;
