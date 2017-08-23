<?php
/**
 * 超全局数组 超全局变量
 * PHP 中的许多预定义变量都是“超全局的”
 * 这意味着它们在一个脚本的全部作用域中都可用。在函数或方法中无需执行 global $variable; 就可以访问它们
 *  $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
 */
echo '<pre>';
print_r($_SERVER);
print_r($_REQUEST);
echo '</pre>';
?>