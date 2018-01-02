<?php
/**
 * 代理模式
 * 适用于：对已有对象的部分功能发生改变，但不需要修改原始对象的解构
 * Class DecoratorBand
 */
class Proxy
{
    private $shoesType;
    private $shoes;

    public function __construct($shoesType)
    {
       $this->shoesType = $shoesType;

    }

    public function product()
    {
        switch($this->shoesType)
        {
            case 'sport':
                echo '我可以偷点工减点料';
                $this->shoes = new ShoesSport();
                break;
            case 'skateboard':
                echo '我可以偷点工减点料';
                $this->shoes = new ShoesSkateboard();
        }

        $this->shoes->product();
    }


}