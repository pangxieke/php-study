<?php
/*
 * 使用循环<h1>---<h6>输出标题
 */

$a= $_GET['title'] ? : 'This is title';
$b = '';
for ($i = 1; $i < 7; $i++){
    $b .= '<h' . $i . '>' . $a . '</h' . $i . '>';
}
echo $b;
