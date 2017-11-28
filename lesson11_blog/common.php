<?php
require_once './config.php';

session_start();
date_default_timezone_set('PRC'); //设置中国时区

function getPosts($id = null, $cat_id = null) {
    $posts = array();
    $sql = "SELECT " . DB_PREFIX."article.* FROM " . DB_PREFIX."article"
        . " INNER JOIN " . DB_PREFIX. "category "
        . "ON " . DB_PREFIX."article.category_id=" . DB_PREFIX ."category.id";

    if ( isset($id) ) {
        $id = (int) $id;
        $sql .= " WHERE " . DB_PREFIX . "article.id = {$id}";
    }

    if (isset($cat_id) ){
        $cat_id = (int) $cat_id;
        $sql .= " WHERE " . DB_PREFIX . "category.id = {$cat_id}";
    }

    $sql .= " ORDER BY " . DB_PREFIX . "article.id desc";

    $link = getLink();
    $query = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_assoc($query) ) {
        $posts[] = $row;
    }

    return $posts;
}

function addPost($title, $contents, $category, $user_id) {
    $title 		= strval($title);
    $contents 	= strval($contents);
    $category 	= (int) $category;
    $user_id 	= (int) $user_id;
    $now = time();

    $link = getLink();
    $sql = "INSERT INTO `" . DB_PREFIX ."article` SET `category_id` = '{$category}'"
    . ", `title` = '{$title}', `content` = '{$contents}', `created` = $now"
    . ", `user_id` = $user_id";

    return mysqli_query($link, $sql);
}

function login($username, $password){
    $sql = "SELECT * from `" . DB_PREFIX . "user` WHERE `username`= '$username' and `password`= '$password'";

    $link = getLink();
    $query = mysqli_query($link, $sql);

    $posts = [];
    while ($row = mysqli_fetch_assoc($query) ) {
        $posts[] = $row;
    }

    return array_pop($posts);
}

function register($username, $password, $email)
{
    $password = md5($password);
    $now = time();
    $sql = "INSERT INTO `" . DB_PREFIX . "user` (`username`, `password`, `email`, `created`) VALUES ('$username', '$password', '$email', '$now')";

    $link = getLink();
    return mysqli_query($link, $sql);
}

function getNav()
{
    $category = getCategorys();
    $str = <<<TD
<header>
<a id="logo" title="Blog"></a>
<nav>
  <a href="./index.php">首页</a> |
TD;
    if($category){
        foreach ($category as $val){
            $str .= "<a href='./index.php?category_id={$val['id']}'>{$val['name']}</a> |";
        }
    }
    $str .= '<a href="./admin.php">后台</a>';
    $str .= "</nav></header>";
    return $str;
}

function getAdminNav()
{
    $username = @$_SESSION['username'];
    $str = <<<TD
<header>
<a id="logo" title="Blog"></a>
<nav>
  <a href="./index.php">前台</a> |
  <a href="./add.php">添加</a> |
TD;
    if($username){
        $str .= "<a href='./logout.php'>退出( " . $username . ")</a>" ;
    }
    $str .= "</nav></header>";
    return $str;
}

/**
 * 判定用户是否登录
 * @return bool
 */
function checkLogin()
{
    return $_SESSION['user_id'] ? $_SESSION['user_id'] : false;
}

function isLogin(){
    $user_id = checkLogin();
    if(!$user_id){
        echo '<script>
                alert("您还未登录！");
                window.location.href="./login.php"
        </script>';
    }
    return $user_id;
}

function getUsernameById($user_id)
{
    $user_id = intval($user_id);
    $sql = "SELECT `username` from `" . DB_PREFIX . "user` WHERE `id`= '$user_id'";

    $link = getLink();
    $query = mysqli_query($link, $sql);

    $posts = [];
    while ($row = mysqli_fetch_assoc($query) ) {
        $posts[] = $row;
    }

    return array_pop($posts)['username'];
}

function getCategorys($category_id = null)
{
    $category_id = intval($category_id);
    $sql = "SELECT * from `" . DB_PREFIX . "category` ";
    if($category_id){
        $sql .= " WHERE `id`= '$category_id' ";
    }

    $link = getLink();
    $query = mysqli_query($link, $sql);

    $posts = [];
    while ($row = mysqli_fetch_assoc($query) ) {
        $posts[] = $row;
    }

    return $posts;
}

function getLink()
{
    $link = mysqli_connect (DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);

    //判断是否连接成功
    if (!$link) {
        echo "Failed to connect to MySQL";
        exit;
    }
    mysqli_select_db ($link, DB_DATABASE);
    mysqli_set_charset($link, DB_CHARSET);
    return $link;
}
