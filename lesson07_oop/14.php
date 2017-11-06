<?php
/**
 * 命名空间
 * 命名空间用来解决重名问题：
 * 1.  用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突。
 * 2.  为很长的名字创建简短名字, 提高源代码的可读性。
 *
 * 注意：所有非 PHP 代码包括空白符都不能出现在命名空间的声明之前
 * 使用 namespace定义
 * 别名是通过操作符 use 来实现, 可以定义别名
 */
namespace MyProject;

//重名函数
function sub($a, $b){
    return $a + $b;
}

class Connection {
    function connect() {
        echo 'this is one';
    }
}


namespace AnotherProject;

class Connection {
    function connect() {
        echo 'this is two';
    }
}

//重名函数
function sub($a, $b){
    return $a + $b + 10;
}

//直接使用时，是在对于的域名空间下，最新定义的是AnotherProject空间， 此时在空间AnotherProject下
echo sub(1, 2);

//使用完整的空间说明
$one = new \MyProject\Connection();
$one->connect();
echo \MyProject\sub(1, 2);//重名函数

echo '<hr>';

//使用完整的空间说明
$two = new \AnotherProject\Connection();
$two->connect();
echo \AnotherProject\sub(1, 2); //重名函数

echo '<hr>';

//使用use 定义空间别名
use \MyProject as pro; //as 后可以省略

$three = new pro\Connection();
$three->connect();

