<?php
header("content-type:text/html;charset=utf-8");
$str = 'http://www.baidu.com/index.php';

$pattern = '/\w{4}:\/\/.*/';

$str = 'abc0';
$pattern= '/...0/';

$str = 'ab	cd';
$pattern = '/\w*\t/';

$str = '*100';
$pattern = '/\d\d\d/';

$str = "ab\ncd";
$pattern = '/\s\w\w/';

$str = '4';
$pattern = '/[^0-3]/';

$str = 'http://www.163.com';
$pattern = '/\w{4}:\/\/\w{3}.163/';

$str = 'gopop____adsfk123491239008d';
$pattern = '/8d\B/';

$str = 'this is island';
$pattern = '/\bis\b/';

$str = '<a href="http://www.pangxieke.net">lmap</a>';
$pattern = '/<a\s\w{4}=\"(.*).net\">(\w.*)<\/a>/';

$str = 'orgabdgdbl';
$pattern = '/[org|bl]/';

$str = 'thisloveword';
$pattern = '/s(.*)w/';

$str = '2008-08-08-';
$pattern = '/\d{4}(.)\d{2}\1\d{2}\1/';

$str = 'Game';
$pattern = '/game/i';

$str = "this is \n my live";
$pattern = '/.*\s.*/';

$str = '<a>aaaaaaaa</a><a>bbbbbbbbbb</a>';
$pattern = '/<a>.*?<\/a>/U';



if ( preg_match_all($pattern, $str, $ss) ){
    echo $pattern , '成功匹配了' , $str ;
    echo '<pre>';
    print_r($ss);
    echo '</pre>';
}else{
    echo '匹配失败';
}