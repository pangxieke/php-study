<?php
/**
    字符串的比较函数
    strcmp			//比较区分大小写
    strcasecmp		//比较不区分大小
    strnatcmp		//自然排序法比较
    数组的比较函数usort
 */

echo strcmp('a', 'b') . '<br>';
echo strcmp('b', 'a') . '<br>';
echo strcmp('b', 'b') . '<br>';
$name = "pangxieke";
if( strcasecmp( $name ,"pangxieke") == 0 ){
    echo '用户名正确，pangxieke';
}else {
    echo "this is a wrong";
}


var_dump(strcmp('Za' , 'ZZ')) . '<br>';
echo strnatcmp('12' , '5') . '<br>';

function mysort( $a, $b ){
    if ( $a == $b ){
        return 0;
    }
    return $a > $b ? 1 : -1;
}
$arr = array(
    'this',
    'that',
    'my',
    'girl',
);
usort($arr, 'mysort');
echo '<pre>';
print_r($arr);
echo '</pre>';