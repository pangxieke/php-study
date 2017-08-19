<?php
/**
 * 冒泡排序
 * 关键 2次循环
 * 比较，交换
 */
$arr = [3, 5, 8, 7, 9, 4];
$num = count($arr);       //数组长度

for($i = 0; $i < $num; $i++)
{
    for($j = 0; $j < $num; $j++)
    {
        $temp = $arr[$j];       //存储交互值
        if($j < $num - 1 && $arr[$j] > $arr[$j + 1])
        {
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<hr>';

/**
 * 方法2 计算次数更少
 */
$arr = [3, 5, 8, 7, 9, 4];
$num = count($arr);       //数组长度

for($i = 0; $i < $num; $i++)
{
    for($j = $i + 1; $j < $num; $j++)
    {
        if($arr[$i] > $arr[$j])     //判断
        {
            $temp = $arr[$i];       //存储交互值
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }

    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';

