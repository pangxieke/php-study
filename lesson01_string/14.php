<?php
/**
 * 加减乘除计算器
 */

$a = empty($_GET['num1']) ?	0 : $_GET['num1'];	//第一位 num1
$b = empty($_GET['num2']) ?	0 : $_GET['num2'];	//第二位 num2
$c = empty($_GET['num']) ?	0 : $_GET['num'];	//运算符 num 1为加 2为见减	3为* 4为/

$d = empty($_GET['sub']) ?	1 : $_GET['sub'];	//提交按钮

$v='';									//结果存储

if(!empty($d)){
    switch($c){
        case 1:
            $v = $a + $b;
            break;
        case 2:
            $v = $a - $b;
            break;
        case 3:
            $v = $a * $b;
            break;
        case 4:
            $v = $a / $b;
            break;
        default:
            echo "please input num";
    }
}
echo $v;

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
</head>
<body>
<form action="#" method="get">
    请计算：<input type="text" name="num1" >	<!--第一个输入框----->
    <select name="num">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
    </select>
    <input type="text" name="num2" >
    <input type="submit" name="sub" value="计算">

</form>
</body>
</html>