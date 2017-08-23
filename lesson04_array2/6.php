<?php
//array_filter()	返回字符串，将字符串的值依次传递到回调函数
//array_walk()		返回boolean，将字符串的值，键名等传递到回调函数
//array_map			返回数组	将回调函数作用到字符串
$arr = array(3, 5, 2, 7, 10, 'aaa', 'bbb');

function myFilter($a){
    if($a %2 == 0){
        return true;
    }
}
$b = array_filter($arr, 'myFilter');
echo '<pre>';
print_r($b);
echo '</pre>';
echo '<pre>';
print_r($b);
echo '</pre>';

function my($item, $key, $value){
    echo  $value['0'] . $item . $value['1'];
}
$b = array_walk($arr, 'my',array('aa', '<br>'));


function mypc($i){
    return 'bb' . $i;

}
$b= array_map('mypc', $arr);

echo '<pre>';
print_r($b);
echo '</pre>';


echo '<hr color="red">';

