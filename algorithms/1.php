<?php
/**
 *	在php中都有哪些运算符，要求详细介绍，并使用代码示例说明运算符的应用
 *	写一个简单计算器，要求，计算好了之后，输入的数据能够停留在表单中，不能使用JS来实现
 *	用循环办出十行十列隔行变色表格	for可以 双层输出  也可以单层输出
 *	用for循环输出四个不同方向的九九乘法表
 *	写一个星阵图的函数
自定义函数去实现系统函数的功能。  strrev()  substr()  array_combine()
 */
?>
<?php	//运算符
/**	运算符
 *	算数运算符	+	-	*	/	%	++	--
 *	字符串链接符	.
 *	赋值运算符	=	+=	-=	*=	/=	%=	.=
 *	比较运算符	>	<	>=	<=	!=	<>	!==	==	===
 *	逻辑运算符	&&	||	!	xor
 *	位 运算符 	&	|	~	<<	>>	^
 */

// 算数运算符
$a = 10; $b = 5;
echo $a + $b; echo $a - $b; echo $a * $b; echo $a/ $b;
echo $a%$b; echo $a++; echo $a--;
echo '<hr>';

//	字符串连接符
echo $a . $b;
echo '<hr>';

//赋值运算符
$a = 2; echo $a;
$a += 3;	echo $a .'<br>';
$a -= 4;	echo $a .'<br>';
$a *= 5;	echo $a .'<br>';
$a /= 6;	echo $a .'<br>';
$a .= 'r';	echo $a .'<br>';
echo '<hr>';

//比较运算符
$a = 8; $b = 5;
if ($a > 5){ echo "8 > 5";}
if ($a < 9){ echo "8 < 9";}
if ($a >= 5){ echo "8 >= 5";}
if ($a <= 8){ echo "8 <= 8";}
if ($a != 9){ echo "8 <= 9";}
if ($a <= '8'){ echo "8 <= '8'";}
echo '<hr>';

//逻辑运算符
$a = TRUE;	$b = FALse;
if ($a && $b){echo 'this is true & false';}else{echo 'this is wrong<br>';}
if ($a || $b){echo 'this is true || false<br>';}else{echo 'this is wrong<br>';}
if ($a xor $b){echo 'this is true xor false<br>';}else{echo 'this is wrong<br>';}
if (!$a){echo 'this is true & false';}else{echo 'this is wrong<hr>';}

//位运算符
//3 的2进制 11
echo 3 & 2;   //10
echo 3 | 5;		//101 + 11 , 111
var_dump( !3);	//0
var_dump( ~5);	// 00000101.补码 00000101，取反 补码f11111010，源码f00000101 +1；f0000110
echo 8<<2 ;
echo 8>>2 ;
echo '<hr>';
?>



<?php	//计算器
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
            echo "please input num<r>";
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
    <?php
    $_GET['num1'] = isset($_GET['num1']) ? $_GET['num1'] : '';
    $_GET['num2'] = isset($_GET['num2']) ? $_GET['num2'] : '';
    ?>
    请第一个数：<input type="text" name="num1" value="<?php echo $_GET['num1']  ?>"><br>	<!--第一个输入框----->
    <input type="radio" name="num" value="1" checked>+
    <input type="radio" name="num" value="2">-
    <input type="radio" name="num" value="3">*
    <input type="radio" name="num" value="4">/ <br>
    第二个数：<input type="text" name="num2" value="<?php echo $_GET['num2']  ?>">
    <input type="submit" name="sub" value="计算">

</form>
</body>
</html>


<?php   //	输出10行10列表格，隔行变色

echo '<table width="600" border="1" align="center">';
for($i = 0; $i < 50; $i++){
    if($i%20 == 0){
        $bg='orange';
    }
    if($i%10 == 0){
        echo '<tr bgcolor="' . $bg . '">';
    }
    echo '<td>' . $i . '</td>';
    if($i%10 == 9){
        echo '</tr>';
    }
    $bg = '';
}
echo '</table>';


//	for循环输出4中乘法口诀表
//	正常顺序
for($i = 1; $i <10; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "$j * $i = " . ($i * $j) . '&nbsp;&nbsp';
    }
    echo '<br>';
}
echo '<hr>';

//倒序
for($i = 9; $i > 0; $i--){
    for($j = 9; $j >= $i; $j--){
        echo "$j * $i = " . ($i * $j) . '&nbsp;&nbsp;&nbsp';
    }
    echo '<br>';
}
echo '<hr>';

//倒序2
for($i = 9; $i > 0; $i--){
    for($j = $i; $j > 0; $j--){
        echo "$i * $j = " . ($i * $j) . '&nbsp;&nbsp;&nbsp';
    }
    echo '<br>';
}
echo '<hr>';

//
echo '<table width="800" border="1">';
for($i = 9; $i > 0; $i--){
    echo '<tr>';
    for($k = $i; $k > 0; $k--){
        echo '<td></td>';
    }
    for($j = 9; $j >= $i; $j--){
        echo '<td>' . "$j * $i =" . ($i * $j) . '</td>';
        //echo "$j * $i = " . ($i * $j) . '&nbsp;&nbsp;&nbsp';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';


echo '<table width="800" border="1">';
for($i = 9; $i > 0; $i--){
    echo '<tr>';
    for($k = 9; $k > $i; $k--){
        echo '<td></td>';
    }
    for($j = 1; $j <= $i; $j++){
        echo '<td>' . "$j * $i =" . ($i * $j) . '</td>';
        //echo "$j * $i = " . ($i * $j) . '&nbsp;&nbsp;&nbsp';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';




?>


<?php //星阵图


function xxx($n = 10){
    for($i = $n; $i > 0 ; $i--){
        for($j = $i; $j > 0; $j --){
            echo '&nbsp;';
        }
        for($k = $n; $k > 0; $k--){
            echo '*';

        }
        echo '<br>';
    }


}
xxx();

//	自定义函数实现strrev()的功能。strrev(),倒序输出字符串。

/*
    功能：自定义函数实现strrev()的功能。strrev()：倒序输出字符串
    思路：
    拆分成单个字母，形成数组，对数组倒序，排列，联接成字符串
    @param array $arr  输入一个字符串
    return	返回倒序排列的字符串
*/
function func_demo($arr){		//$arr传入字符串
    $nb = str_split($arr);		//str_split,分隔字符串,形成数组
    /*							// 获取字符串长度，倒序循环，然后输出字符，在联接
    $num = count($nb);
     for($i = $num ;$i >= 0; $i--){
         $array .= $nb[$i];
     }
     */
    $rev=array_reverse($nb);
    foreach($rev as $val){
        $array .= $val;
    }

    return $array;
}
