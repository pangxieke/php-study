<?php
//正则表示式
//preg_match_all
//preg_match

$arr = 'pangxieke@163.com this is my email';
$pattern = '/\w*@\d{3}\.\w{3}/';
preg_match($pattern, $arr, $b);
echo '<pre>';
print_r($b);
echo '</pre>';
echo '<hr>';


/*	PREG_OFFSET_CAPTURE 字符指针偏移


*/
preg_match_all($pattern, $arr, $b, PREG_PATTERN_ORDER);
echo '<pre>';
print_r($b);
echo '</pre>';