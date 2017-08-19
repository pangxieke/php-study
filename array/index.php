<?php
/*
1.	存储在数组中的值，称为数组元素。
索引，通常称为数组下标下标。
array声明，一定要此关键字。切记

2.	索引数组，索引值为数字，以0开始
关联数组，索引值为字符串

3.	对指定的下标已经声明过，属于从新对变量赋值，索引键值不加1.
对没有指定索引值的，紧跟指定索引值元素中的最高的索引值递增。

4.	for循环变量
for($i = 0; $i < count($arr); $i++){
echo $arr[$i];//$arr 数组名必须是和循环为名称一样，此函数名是外面传递过来的，不能自定义一个变量

5.	foreach 变量数组，和对象。
foreach ($arr as $val){
echo $val;
}
第二种
foreach ($arr as $key=>$val){
echo $key.$val;
}

6.	each()函数
返回4个元素，分别为 0 1 key ,value ; 1对应value
1次一个返回元素。使用一次函数，返回一个。知道末尾，返回bool 的false

7.	list()语言结构
把数字索引的数组，从0开始，赋值给一个变量。
不是直接接收数组作为参数，而是通过=号，以赋值的方式，将元素值，一个个对应赋值
list( , , $power)=array(1, 3, 33)
$power=33;

8.	while遍历数组
while( list($key, $val) = each($array) )
while遍历前最后用reset()将each的指针重置

9.	内部指针，	参数都只有一个，为数组本身
current();	当前位置的value
key();		当前索引值
next();		指针下移，不return值
prev();		指针上移
end();		指针到末尾
reset();	指针无条件移动第一个索引位置

10.	array_values()
函数，返回数组所有元素的值，不保留key，重新赋值数字key。

11.	array_keys()
返回通过value 索引 key 。3个值。第一个为array，第二个value，
第3个false 默认为false，相当于模糊搜索，true相当于===
*/
