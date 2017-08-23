<?php
/**
    原子
    普通字符
    特殊字符
    非打印字符
    通用字符
    自定义原子表
    元字符
    限定符
    边界符
    句号
    模式选择符
    模式单元
    后项引用
 */

header("content-type:text/html;charset=utf-8 ");
$str = 'this 5	is 
	my love';
$pattern = '/t/';				//普通字符
$pattern = '/.*\s/';			//贪婪匹配，匹配到了最后一个空格前。使用特殊字符
$pattern = '/\t/';				//匹配到制表符，给出指定的指针，但无法在页面显示
$pattern = '/\d/';				//匹配数字
$pattern = '/t\w/';				//匹配任意字母
$pattern = '/[tim]\w/';			//自定义原子表，定义一组彼此平等的原子

$str = 'this is island';
$pattern = '/\w{1,4}\s/';		//限定符 this is
$pattern = '/\ws\b/';			//边界符 this is
$pattern = '/is\B/';			//is 的右边不能是边界，匹配island 的is
$pattern = '/./';				//匹配一个一个字母，一次匹配一个
$pattern = '[is|la]';			//模式选择符
$pattern = '/\w{2}(is)(\s)\\1\\2/';//匹配了this is 包含2个后向引用
if($preg = preg_match_all($pattern, $str, $arr, PREG_OFFSET_CAPTURE)){
    echo '正则' . $pattern . ' 成功匹配了 ' . $str ;
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}else{
    echo 'this is a worry';
}
echo '<pre>';
print_r($arr);
echo '</pre>';

