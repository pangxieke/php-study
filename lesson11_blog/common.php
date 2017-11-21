<?php
include('./conn.php');
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

    global $link;
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

    global $link;
    $sql = "INSERT INTO `" . DB_PREFIX ."article` SET `category_id` = '{$category}'"
    . ", `title` = '{$title}', `content` = '{$contents}', `created` = $now"
    . ", `user_id` = $user_id";
    return mysqli_query($link, $sql);
}

function login($username, $password){
    $sql = "SELECT * from `" . DB_PREFIX . "user` WHERE `username`= '$username' and `password`= '$password'";
    global $link;
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
    $sql = "INSERT INTO `" . DB_PREFIX . "user` (`username`, `password`, `email`, `created`) VALUES ('$username', '$password', '$email', NOW())";

    global $link;
    return mysqli_query($link, $sql);
}

function getNav()
{
    $username = @$_SESSION['username'];
    $str = <<<TD
<header>
<a id="logo" title="Blog"></a>
<nav>
  <a href="./index.php">首页</a> |
  <a href="./add.php">添加</a> |
  <a href="./login.php">登录</a> |
  <a href="./register.php">注册</a> |

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
    if($_SESSION['username']){
        return $_SESSION['user_id'];
    }else{
        return false;
    }
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
    global $link;
    $query = mysqli_query($link, $sql);

    $posts = [];
    while ($row = mysqli_fetch_assoc($query) ) {
        $posts[] = $row;
    }

    return array_pop($posts)['username'];
}
