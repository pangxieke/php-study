<?php
require_once './common.php';

$username = @$_POST['username'];
$password= md5(@$_POST['password']);

$res = login($username, $password);


if(empty($_SESSION['user_id']) && $res)
{

    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $res['id'];

    echo '<script>
                alert("登录成功！");
                window.location.href="./admin.php"
        </script>';
}elseif(empty($_SESSION['user_id']) && $res == false){
    echo '<script>
                alert("登录失败，请重试");
        </script>';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>blog</title>
    <link rel="stylesheet" type="text/css" href="./dist/css/main.css" />
</head>

<body>
<div class="container">
    <?=getAdminNav()?>
    <?php
    if(!empty($_SESSION['user_id'])){
        echo '欢迎您' . $_SESSION['username'];
    }elseif(empty($_SESSION['user_id']) && $_GET)
    {
        echo '账户密码错误,请重新登录';
    }else{
        ?>
        <div style="margin:20px auto; width:40%;">
            <form action="./login.php" method="post">
                用户名:<input type="text" name="username" value="<?=$username?>"><br>
                密&nbsp;&nbsp;&nbsp;码:<input type="password" name="password" value="<?=@$_POST['password']?>"><br>
                <input type="submit" name="" value="登录">
                <a href="./register.php">注册</a>
            </form>
        </div>
    <?php }?>
</div>
</body>
</html>

