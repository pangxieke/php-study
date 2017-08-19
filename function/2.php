<?php
/**
 * 义一个表格
 *
 * @param $name 标题名
 * @param $r 行数
 * @param $c 列数
 * @return string 返回一个表格
 */
function mytable($name, $r, $c){
    $a = '';
    $a .= '<table border="1"; width="600">';
    $a .= '<caption>' . $name . '</caption>' ;
    for($i = 0; $i < $r ; $i++){
        $a .= '<tr>';
        for($j = 0; $j < $c; $j++){
            $a .= '<td>'.($i*$c+$j) .'</td>';

        }
        $a .= '</tr>';
    }
    $a .= '</table>';
    return $a;
}
echo mytable('我的表格', 5, 8);

