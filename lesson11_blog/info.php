<?php
require_once './common.php';

$id = $_GET['id'];

$result = getPosts($id);
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
    <?php
    foreach($result as $key=>$value ){?>

        <div>
            <h2><?=$value['title']?></h2>
            <p class="dateview">
                <span><?=getUsernameById($value['user_id'])?></span>
                <span><?=date('Y-m-d H:i:s', $value['created'])?></span>
            </p>
            <?=$value['content']?>
        </div>
    <?php }?>
</div>
</body>
</html>
