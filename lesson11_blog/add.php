<?php
/**
 * 这个文件是用来接收form表单提交的数据
 * @date 2017.6.22
 */
//引入文件
require_once './common.php';

//接收表单变量 通过$_GET;
$title = @$_GET['title'];
$content = @$_GET['content'];

$category = '1';
if($title && $content){
    $res = addPost($title, $content, $category);
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
            <?=getNav()?>
            <form action="./add.php" method="GET" >
                title:<input type="text" size=20  name="title"/><br>
                content:<textarea name="content"></textarea><br>
                <input type="submit" name="submit"/>
            </form>
        </div>

    </body>
</html>


