<?php
/**
 * 模板模式
 * 使用相同的模板，相同的操作
 * 典型的控制反转，子类复写算法，但是最终的调用都是抽象类中定义的方式，
 * 也就是说抽象类中 定义了算法的执行顺序
 */

function autoload($classname)
{
    require_once $classname . '.php';
}

spl_autoload_register('autoload');

(new SmsCompanyOne())->send('13800138000');
(new SmsCompanyTwo())->send('13800138000');