<?php
require_once './common.php';

$username = @$_GET['username'];
$password= md5(@$_GET['password']);

$res = login($username, $password);
if($res)
{
    echo '<script>
                alert("登录成功！");
                window.location.href="./index.php"
        </script>';
}else if($_GET)
{
    echo '账户密码错误,请重新登录';
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
        <?=getNav()?>
        <form action="./login.php" method="get">
            用户名：<input type="text" name="username"><br>
            密码：<input type="password" name="password"><br>
            <input type="submit" name="" value="登录">
        </form>
    </div>
</body>
</html>

