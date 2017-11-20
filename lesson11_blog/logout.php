<?php
session_start();
$_SESSION['user_id'] = '';
$_SESSION['username'] = '';

echo '<script>
        alert("您已经退出！");
        window.location.href="./index.php"
</script>';