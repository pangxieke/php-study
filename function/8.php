<?php
/**
 * 自定义函数，计算每月日历。输入每月多少天，第一天星期几，返回当月日历
 */

/**
 * 第一个table()函数，用来计算每月日历。输入每月多少天，第一天星期几，返回当月日历。
 *
 * 原理：使用两层for循环，打印一个表格。表格内的输出值使用 $i*7+$j -$num1.
 * 在内部对$i*7+$j -$num1进行判断。值为负数，输出空<td>，值小于$num2 输出"<td>值</td>"
 * $param 	number	$num1	第一个参数，本月的一号是星期几
 * $param	number	$num2	第二个参数，本月有多少号
 * return	返回一个表格

 */
function table($k, $m){
    $a ='<table border="1" width="600" cellpadding="0" cellspacing="0" align="center">';
    $a .='<tr bgcolor="orange"><td>星期日</td><td>星期一</td><td>星期二</td><td>星期三</td><td>星期四</td>
				<td>星期五</td><td>星期六</td><tr>';
    for($i = 0; $i <6; $i++){
        $a .= '<tr>';
        for($j = 1;$j <8; $j++){
            if ( ($i*7+$j - $k ) <= 0 ){
                $a .= '<td>' . '&nbsp;' .'</td>';
            }elseif( ($i*7+$j - $k ) <= $m){
                $a .= '<td>' . ($i*7+$j - $k ) .'</td>';
            }
        }
        $a .= '</tr>';
    }
    $a .= '</table>';
    return $a;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form action="#" method="get">
            <?php
                $_GET['day'] = isset($_GET['day']) ? $_GET['day'] : '';
                $_GET['mouth'] = isset($_GET['mouth']) ? $_GET['mouth'] : '';
            ?>
            本月第一天星期：<input type="text" name="day" value="<?=$_GET['day']?>" ><br>
            这个月一共  有：<input type="text" name="mouth" value="<?=$_GET['mouth']?>" ><br>
            <input type="submit" name="sub">


        </form>
        <?php
        if(isset($_GET['sub']) && ($_GET['day'] <= 7) && $_GET['mouth'] >= 28 && $_GET['mouth'] <=31){

            echo table($_GET['day'], $_GET['mouth']);

        }else{
            echo "月份及天数输出错误";
        }

        ?>
    </body>
</html>