<?php
$b = array(
    array('id'=>'1','name'=>'monan','pwd'=>'123456','email'=>'monan1116@163.com'),		//=>对应
    array('id'=>'2','name'=>'TJL','pwd'=>'123456','email'=>'TJL@163.com'),			//=>对应
    array('id'=>'3','name'=>'TLH','pwd'=>'123456','email'=>'TLH@163.com'),			//=>对应
);
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
</head>
<body>
<table border="1" width="600" >
    <?php foreach($b as $arr1){ ?>
        <tr>
            <?php foreach($arr1 as $arr2){ ?>
            <td>

                <?php echo $arr2; ?>
            </td>
            <?php }  ?>
        </tr>
    <?php } ?>

</table>
</body>
</html>