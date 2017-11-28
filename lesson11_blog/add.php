<?php
/**
 * 这个文件是用来接收form表单提交的数据
 * @date 2017.6.22
 */
//引入文件
require_once './common.php';

//检测是否登录，未登录不允许添加文章
$user_id = isLogin();

//接收表单变量 通过$_GET;
$title = @$_POST['title'];
$content = @$_POST['content'];


$category = @$_POST['category_id'];

if($title && $content){
    $res = addPost($title, $content, $category, $user_id);
    if($res){
        echo '<script>
                alert("添加成功！");
                window.location.href="./index.php"
        </script>';
        exit;
    }
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
            <?php $cates = getCategorys();

            ?>
            <form action="./add.php" method="post" >
                title:<input type="text" size=20  name="title"/><br>
                category:<select name="category_id">
                    <?php foreach($cates as $val){?>
                    <option value="<?=$val['id']?>"><?=$val['name']?></option>
                    <?php }?>
                </select>
                <br>
                content:<textarea name="content" style="width:50%;min-height:200px;"></textarea><br>

                <input type="submit" name="submit" value="添加"/>
            </form>
        </div>

    </body>
</html>


