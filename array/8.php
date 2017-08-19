<?php
/**
 * 3维数组，输出3个表格
 */

$bumen = array(
    '教学部'=>array(
        array('1','techer1','29'),
        array('2','techer2','33'),
        array('3','techer3','18'),
    ),

    '教务部'=>array(
        array('1','techer4','18'),
        array('2','techer5','28'),
    ),

    '咨询部'=>array(
        array('1','张三','19'),
        array('2','李四','20'),
    ),
);

$a = '';
foreach($bumen as $key=>$arr1){

    $a .= '<table width="600" border="1">';
    $a .= '<caption>'. $key . '</caption>';			//此为键名
    foreach($arr1 as $arr2){
        $a .= '<tr>';

        foreach($arr2 as $arr3){
            $a .= '<td>' . $arr3 . '</td>';
        }

        $a .= '</tr>';
    }
    $a .= '</table>';
}
echo $a;
