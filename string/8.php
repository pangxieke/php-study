<?php
/**
 * 10 行10列的表格
 * 使用for循环输出8行5列的一个表格，内容aaa,并且隔行颜色
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>10*10 Table</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <table width="600" border="1" align="center">
            <?php $row =  0;$col = 0; while($row < 10): ?>
                <tr>
                    <?php $col = 0;while($col < 10): ?>
                        <td><?php echo $row * 10 + $col; ?></td>
                        <?php $col++;endwhile; ?>
                </tr>
                <?php  $row++;endwhile; ?>

        </table>

        <hr>

        <?php
        /*
         * 使用for循环输出8行5列的一个表格，内容aaa,并且隔行颜色
         */
        $a = '<table width="600" center="align" border=1 cellspadding="0" align="center">';
        for($i = 1; $i < 9; $i++){
            if ($i%2 == 0){

                $a .='<tr bgcolor="silver">';
                for($j = 1; $j < 6; $j++){
                    $a .= '<td>' . "aaa" .'</td>';
                }
            }else {
                $a .='<tr bgcolor="orange">';
                for($j = 1; $j < 6; $j++){
                    $a .= '<td>' . "aaa" .'</td>';
                }
                $a .='</tr>';
            }


        }
        $a .= '</table>';
        echo $a;
        ?>

        <hr>
        <?php
        /**
         * 使用for、while、循环输出1到50的值，要求每次循环只能输出一个值，每输出10个换一行。
         */

        //for
        $a = '<table border="0" width="800" align="center">';
        for($i = 0; $i < 5; $i++){
            $a .= '<tr>' ;
            for($j = 1; $j < 11; $j++){
                $a .='<td>' . ($i*10 + $j) .'</td>' ;
            }
            $a .= '</tr>' ;
        }
        $a .= '</table>';
        echo $a . '<hr>';

        //while
        $a = '<table border="0" width="800" align="center">';
        $i=0;
        while($i < 5){
            $j = 1;
            $a .= '<tr>' ;
            while($j <= 10){
                $a .='<td>' . ($i * 10 + $j) .'</td>' ;
                $j++;
            }
            $a .= '</tr>' ;
            $i++;
        }
        $a .= '</table>';
        echo $a . '<hr>';
        ?>
    </body>
</html>
