<?php
/**
 *	printf的使用
 *	%%	%
 *	%b	二进制
 *	%c	ASCII
 *	%d	无符号十进制
 *	%e	可续计数
 *	%u	有符号十进制
 *	%f
 *	%F
 *	%o	八进制
 *	%s	string
 *	%x	十六进制
 *	%X
 */


$a = -255;
printf('%%', $a);
echo '<hr>';
printf('%b', $a);
echo '<hr>';
printf('%c', 97);
echo '<hr>';
printf('%d', $a);
echo '<hr>';
printf('%e', $a);
echo '<hr>';
printf('%u', $a);
echo '<hr>';
printf('%f', $a);
echo '<hr>';
printf('%F', $a);
echo '<hr>';
printf('%o', $a);
echo '<hr>';
printf('%x', $a);
echo '<hr>';
printf('%X', $a);
echo '<hr>';
printf('%s', $a);
echo '<hr>';

$c = 'cdef';					//字符串可以视作“数组”处理，用{}来包含
echo $c[0] . '<br>';
echo $c{1} . '<br>';
echo $c{2} . '<br>';
echo $c{3} . '<br>';
echo substr($c, 2,-1);
echo $c;
$d = array(3, 4, 5);
var_dump(implode('aa', $d));
