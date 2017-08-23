<?php
/**
    字符串处理函数
    explode
    implode
    join
    substr
    mb_substr
    strstr
    strchr
    strrchr
    strpos
    strrpos
    str_replace
 */

$str = 'ab cde ft hl ab hg';
$b = explode( ' ', $str, -2);	//3参数，第一个为分隔符，第二个为字符串，第三个为取得多少个分隔
$c = explode( 'aa', $str);		// aa分隔符不存在，返回一个数组
echo '<pre>';
print_r($b);
echo '</pre>';
echo implode('', $b);		//使用空拼接成字符串
echo '<hr>';
var_dump($c);
echo join( '*', $b);		//作用同implode
$xm = 'dream @is not a dream at one day';
echo substr($xm, 3, 20);	// 2到3个参数
$deam = '梦想终于不再是梦想的一天';
echo mb_substr($deam, 2, 7, 'utf-8') . '<hr>';	//专门用于截取中文字符
echo strstr($deam,'终于');
echo strstr($xm, 'is');		//从数字开始开始截取
ECHO $xm;
echo '<hr>';
echo strchr($xm, 'is');		//strstr 的别名
echo '<hr>';
echo $xm .'<br>';
echo strrchr($xm, 'at');		//从字符串后开始匹配，返回其后的字符

echo '<hr>';
echo strpos($xm, 'd');		//从开始获取 字符的指正
echo strrpos($xm, 'y');	//指定字符串出现的最后位置

echo str_replace( 'dream' ,'mydream', $xm ,$count);	//4个参数，第一个搜索关键字，第二个替换的字，第三个数组，第四个替换次数
echo $count;
