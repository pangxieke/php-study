<?php
/**
 * 访问者模式
 *
 * 策略模式和访问者模式的区分：
 * 其实两者都挺像的，都是实体类依赖了外部实体的算法，但是：
 * 对于策略模式：首先你是有一堆算法，然后在不同的逻辑中去使用；
 * 对于访问者模式：实体的【结构是稳定的】，但是结构中元素的算法却是多变的
 * 比如就像人吃饭这个动作是稳定不变的，但是具体吃的行为却又是多变的；
 */

function autoload($classname)
{
    require_once $classname . '.php';
}

spl_autoload_register('autoload');

$person = new Person();
$person->eat(new America());
echo '<br>';
$person->eat(new Asia());