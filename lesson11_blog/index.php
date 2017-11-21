<?php
/**
 * 文章列表
 */
require_once './common.php';

$result = getPosts();
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
            <div class="banner">
            </div>
            <?php
            foreach($result as $key=>$value ){?>

                <div class="article_box">
                    <h2><?=$value['title']?></h2>
                    <p class="dateview">
                        <span><?=getUsernameById($value['user_id'])?></span>
                        <span><?=date('Y-m-d H:i:s', $value['created'])?></span>
                    </p>
                    <?=mb_substr($value['content'],0, 200)?>
                </div>
            <?php }?>
        </div>

    </body>
</html>

