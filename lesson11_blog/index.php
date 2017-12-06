<?php
/**
 * 文章列表
 */
require_once './common.php';

$category_id = @$_GET['category_id'] ? : null;

$result = getPosts(null, $category_id);
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
                    <a href="./info.php?id=<?=$value['id']?>"><h2><?=$value['title']?></h2></a>
                    <p class="dateview">
                        <span><?=getUsernameById($value['user_id'])?></span>
                        <?php $cate = getCategorys($value['category_id']);?>
                        <span><?=$cate[0]['name']?></span>
                        <span><?=date('Y-m-d H:i:s', $value['created'])?></span>
                    </p>
                    <?=mb_substr($value['content'],0, 200)?>
                </div>
            <?php }?>

            <div id="pager" class="myyiiPager">
                <ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/site/index">首页</a></li>
                    <li class="previous hidden"><a href="/site/index">上一页</a></li>
                    <li class="page selected"><a href="/site/index">1</a></li>
                    <li class="page"><a href="/site/index?page=2">2</a></li>
                    <li class="page"><a href="/site/index?page=3">3</a></li>
                    <li class="page"><a href="/site/index?page=4">4</a></li>
                    <li class="page"><a href="/site/index?page=5">5</a></li>
                    <li class="page"><a href="/site/index?page=6">6</a></li>
                    <li class="page"><a href="/site/index?page=7">7</a></li>
                    <li class="next"><a href="/site/index?page=2">下一页</a></li>
                    <li class="last"><a href="/site/index?page=7">末页</a></li></ul>
            </div>
        </div>

    </body>
</html>

