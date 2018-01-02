<?php
/**
 * php代理器模式
 * 对对象加以【控制】
 * 和适配器的区别：适配器是连接两个接口（【改变】了接口）
 * 和装饰器的区别：装饰器是对现有的对象包装（【功能扩展】）
 */

function autoload($classname)
{
    require_once $classname . '.php';
}

spl_autoload_register('autoload');

$proxy = new Proxy('sport');
$proxy->product();