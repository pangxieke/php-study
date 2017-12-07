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
        <?=getNav()?>
<!--        <header>-->
<!--            <a id="logo" href="/private/yii_blog" title="Blog"></a>-->
<!--            <nav class="topnav" id="topnav">-->
<!--                <a href="/private/yii_blog" id="topnav_current">-->
<!--                    <span>首页</span>-->
<!--                    <span class="en">Protal</span>-->
<!--                </a>-->
<!---->
<!--                <a href="/private/yii_blog/index.php/article/technology" >-->
<!--                    <span>技术知识</span>-->
<!--                    <span class="en">Technology</span>-->
<!--                </a>-->
<!---->
<!--                <a href="/private/yii_blog/index.php/article/liveup" >-->
<!--                    <span>快乐生活</span>-->
<!--                    <span class="en">Live Up</span>-->
<!--                </a>-->
<!---->
<!--                <a href="/private/yii_blog/index.php/article/find" >-->
<!--                    <span>发现分享</span>-->
<!--                    <span class="en">Found Share </span>-->
<!--                </a>-->
<!---->
<!--                <a href="/private/yii_blog/index.php/article/doing" >-->
<!--                    <span>碎言碎语</span>-->
<!--                    <span class="en">Doing</span>-->
<!--                </a>-->
<!---->
<!--            </nav>-->
<!--        </header>-->

        <div class="banner">
            <section class="ybox">
                <ul class="texts">
                    <p>我们不停的翻弄着回忆</p>
                    <p>却再也找不回那时的自己</p>
                    <p>红尘一梦，不再追寻</p>
                </ul>
                <div class="avatar">
                    <a href="#"><span>螃蟹</span></a>
                </div>
            </section>
        </div>

        <article>
<!--            <h2 class="title_tj">-->
<!--                  <p>文章<span>推荐</span></p>-->
<!--            </h2>-->
            <div class="bloglist left">

                <?php
                foreach($result as $key=>$value ){?>
                <div class="article_box">
                    <h3><a href="./info.php?id=<?=$value['id']?>"><?=$value['title']?></a></h3>
                    <!--
                    <figure>
                        <img src="#" alt="">
                    </figure>
                      -->
                    <ul>
                        <p><?=mb_substr($value['content'],0, 200)?></p>
                        <a title="title" href="./info.php?id=<?=$value['id']?>" target="_blank" class="readmore">阅读全文>></a>
                    </ul>
                    <p class="dateview">
                        <span><?=date('Y-m-d H:i:s', $value['created'])?></span>
                        <span>作者：<?=getUsernameById($value['user_id'])?></span>
                        <?php $cate = getCategorys($value['category_id']);?>
                        <span>个人博客：[<a href=""><?=$cate[0]['name']?></a>]</span>
                    </p>
                </div>
                <?php }?>
            </div>

            <aside class="right">
                <div class="weather"></div>
                <div class="news">
                    <h3>
                        <p>最新<span>文章</span></p>
                    </h3>
                    <ul class="rank">
                        <li>
                            <a href="" title="" target="_blank">周鸿祎---梦想</a>
                        </li>
                        <li>
                            <a href="" title="" target="_blank">4月8 小米节</a>
                        </li>
                        <li>
                            <a href="" title="" target="_blank">李开复-如何管理时间</a>
                        </li>

                    </ul>
                    <h3 class="ph">
                        <p>点击<span>排行</span></p>
                    </h3>
                    <ul class="paih">

                        <li>
                            <a href="" title="" target="_blank">周鸿祎---梦想</a>
                        </li>
                        <li>
                            <a href="" title="" target="_blank">4月8 小米节</a>
                        </li>
                        <li>
                            <a href="" title="" target="_blank">面包</a>
                        </li>
                    </ul>

                    <h3 class="links">
                        <p>友情<span>链接</span></p>
                    </h3>
                    <ul class="website">
                        <li>
                            <a href="http://www.dodobook.cc/" target="_blank">dodobook博客</a>
                        </li>
                    </ul>
                </div>
            </aside>
        </article>

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

    </body>
</html>

