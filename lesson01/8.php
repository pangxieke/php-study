<?php
/**
 * 10 行10列的表格
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>10*10 Table</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <table width="600" border="1">
            <?php $row =  0;$col = 0; while($row < 10): ?>
                <tr>
                    <?php $col = 0;while($col < 10): ?>
                        <td><?php echo $row * 10 + $col; ?></td>
                        <?php $col++;endwhile; ?>
                </tr>
                <?php  $row++;endwhile; ?>

        </table>
    </body>
</html>
