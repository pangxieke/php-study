<?php
require_once './common.php';

isLogin();

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
            echo '<h2>Welcome ' . $_SESSION['username'] . '!</h2>';
        ?>
    </div>
</body>
</html>

