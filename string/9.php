<?php
/**
 * 输入月份，得到当月天数
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
</head>
<body>
<form action="#";method="get">
    计算每月有多少天：<br>
    请输入月份：<input type="text" name="name">
    <input type="submit" name="sub">
</form>
<?php echo $_GET['name'] . '月有' ;?>
</body>
</html>

<?php
/**
 *switch语句将输入的1—12值转换成对应的“本月有多少天”。
 */
if(!empty($_GET['sub'])){
    $a=30;
    switch($_GET['name']){

        case 1:
            $b = $a+1;
            break;
        case 2:
            $b = ($a - 2);
            break;
        case 3:
            $b =$a + 1;
            break;
        case 4:
            $b = $a;
            break;
        case 5:
            $b = $a + 1;
            break;
        case 6:
            $b = $a;
            break;
        case 7:
            $b = $a + 1;
            break;
        case 8:
            $b = $a + 1;
            break;
        case 9:
            $b = $a ;
            break;
        case 10:
            $b = $a +1 ;
            break;
        case 11:
            $b = $a ;
            break;
        case 12:
            $b = $a +1 ;
            break;
        default:
            echo "请输入正确的月份";

    }
}
echo $b;




?>

