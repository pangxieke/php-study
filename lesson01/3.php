<?php
/**
 * html 基础结构
 * html 与php 混编
 * $_GET 接受 url参数
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
</head>
<body>
<?php $a=$_GET['a']?>
<?php $b=$_GET['b']?>
<?php if(!empty($a)):?>
    <div><?php echo "欢迎光临 $a, 你的性别$b"; ?></div>

<?php else: echo "请登录"; ?>
<?php endif; ?>

</body>
</html>
