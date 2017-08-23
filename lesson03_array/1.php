<?
/**
 * 打印一个input输入，多选框
 */
//设置字符编码
header("content-type:text/html;charset=utf-8");
?>

<form action="2.php" method="get">
    <input type="checkbox" name="like[]" value="1">女
    <input type="checkbox" name="like[]" value="2">读书
    <input type="checkbox" name="like[]" value="3">兵乓球
    <input type="checkbox" name="like[]" value="4">篮球
    <input type="checkbox" name="like[]" value="5">音乐
    <input type="checkbox" name="like[]" value="6">交流
    <input type="checkbox" name="like[]" value="7">学习
    <input type="submit" name="submit">


</form>

