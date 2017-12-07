<?php
/**
 * 文章列表
 */
require_once './common.php';

$category_id = @$_GET['category_id'] ? : null;

$page = @$_GET['page'] ? : 1;
$pageSize = 3;
$start = ($page - 1) * $pageSize;
$limit = $pageSize;

//查询所有数据
$all = getPosts(null, $category_id);
//查询总条数
$count = count($all);
//获得最大页码
$pageMax = ceil($count / $pageSize);

//当前页查询结果集
$result = getPosts(null, $category_id, $start, $limit);
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
                <ul id="yw0" class="yiiPager"><li class="first hidden"><a href="">首页</a></li>
                    <?php if($page > 1){
                    ?>
                        <li class="previous hidden"><a href="./index.php?page=<?=($page-1)?>">上一页</a></li>
                    <?php } ?>

                    <?php for($i = 1; $i <= $pageMax; $i++){
                        $selected = '';
                        if($page == $i){
                            $selected = 'selected';
                        }
                        echo "<li class='page $selected'><a href='./index.php?page=$i'>$i</a></li>";
                    }

                    ?>

                    <?php
                        $next = $page + 1;
                        if($next <= $pageMax){
                    ?>
                        <li class="next"><a href="./index.php?page=<?=$next?>">下一页</a></li>
                        <?php
                    } ?>


                </ul>
            </div>
        </div>

    </body>
</html>

