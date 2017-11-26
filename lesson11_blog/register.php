<?php
include './common.php';
$data = $_POST;
if(!empty($data))
{
    $username   = $data['username'];
    $password   = $data['password'];
    $email      = $data['email'];

    $res = register($username, $password, $email);
    if($res)
    {
        echo '<script>
                alert("注册成功！请登录！");
                window.location.href="./login.php"
        </script>';
    }

}else
{
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
    <div style="margin:20px auto; width:40%;">
    <form action="./register.php" method="post">
        <div>用户名：<input type="text" name="username" /></div>
        <div>密 码：<input type="text" name="password" /></div>
        <div>Email：<input type="text" name="email" /></div>

        <div><input type="submit"  value="注册"/></div>
    </form>
    </div>
</div>
</body>
</html>
<?php

}

?>
