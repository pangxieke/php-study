<?php
require_once 'Shoes.php';

/**
 * 装饰器模式
 * 适用于：对已有对象的部分功能发生改变，但不需要修改原始对象的解构
 * Class DecoratorBand
 */
class DecoratorBand
{
    public $band = '';
    private $shoes;

    public function __construct(Shoes $obj)
    {
       $this->shoes = $obj;

    }

    public function product()
    {
        $this->shoes->product();
        $this->decorate($this->band);
    }

    public function decorate($value)
    {
        echo "贴上'$value'标签";
    }
}