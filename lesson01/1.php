<?php
/**
 * 知识点
 * 1. var_dump()函数  打印信息
 * 2. echo 输出语句
 * 3. <br> html 代码 输出空格
 * 4. 变量未定义时，会有notice错误 Notice: Undefined variable: num
 * 5. 右加加($num++） 与 左加加（++$num）区别
 */

var_dump($num);         //输出 提示null Notice: Undefined variable: num
echo $num++;	        //无输出， 此时 $num =1
echo '<br/>';           //换号
echo $num++ . '<br/>';  //输出1， 此时 $num = 2
echo ++$num . '<br/>';	//输出3，