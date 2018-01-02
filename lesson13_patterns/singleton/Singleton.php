<?php

class Singleton
{
    private static $_instance;

    private function __construct()
    {
    }

    public function __clone()
    {
        echo 'clone is forbidden';
    }

    public static function getInstance()
    {
        if(!self::$_instance instanceof self){
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    /**
     * 测试方法
     *
     * @return string
     */
    public function test()
    {
        echo "这是个测试 \n";
    }
    
}