<?php
/**
    字符串输出函数
    echo
    print
    die
    exit
    printf
    sprintf
 */

echo ('我'),('是'),'pang ','xie ','ke','<br>';
$a = print('this is a test<br>');
echo $a . '<br>';
//@fopen('12.php', "r") or exit('unable open 12.php');	//程序会在此中止，后面的程序都不执行
//@fopen('13.php', "r") or die(' i unable open 12.php');
echo '<hr>';
$arr = 255;
echo printf('%%', $arr) . '<br>';
echo printf('%b', $arr). '<br>';
echo printf('%c', $arr). '<br>';
echo printf('%d', $arr). '<br>';
echo printf('%e', $arr). '<br>';
echo printf('%f', $arr). '<br>';
echo printf('%F', $arr). '<br>';
echo printf('%u', $arr). '<br>';
echo printf('%s', $arr). '<br>';
echo printf('%o', $arr). '<br>';
echo printf('%X', $arr). '<br>';
echo printf('%s', $arr). '<br>';

$num = 12345;
$text = sprintf('%0.2f', $num);
echo $text;