<?php
/**
 * 正则表达式，只了解即可
 */
/*
    \d	匹配数字
    \D	匹配非数字外的一个字符
    \s	匹配空白字符
    \S	匹配非空白符
    \w	匹配数字字母下划线
    \W	匹配非数字字母下划线的一个其他字符
*/
$patter = '/\d{2}(\d{2})(-)\\1\\2\\1/';

$arr = 'http://www.pangxieke.com/index.php?name=pangxieke@password=123';
$ary = '2008-08-08';

echo preg_match($patter, $ary, $pos ,PREG_OFFSET_CAPTURE);
echo '<pre>';
print_r($pos);
echo '</pre>';
