<?php

/**
 * 抽象类，用于预先定义好方法
 * 相当于领导预先限定你的能力，你只能在这个基础上操作
 *
 * 抽象类不能实例化
 * $obj=new A(); //报错
 */
abstract class A{
    abstract public function test(); //抽象方法，只有函数名，没有{}类实体内容
    abstract public function test2();
}

//如果一个普通类，继承自抽象类，
//那么，必须实现抽象类规定的所有抽象方法.
class B extends A{
    public function test(){
        echo 'b';
    }
    //空实现
    public function test2(){}
}


//如果继承了抽象类，没有完全实现父类的抽象方法
//这个类，也只能是抽象类
abstract class C extends A{
    public function test(){
        echo 'c';
    }
}

/**
 * 接口，只有方法名，连{}都没有
 * 类只能继承一个抽象方法，但是可以继承多个接口。这是二则的主要区别
 * Interface USB
 */
//USB接口
interface USB{

    //报错，因为全是抽象方法，就不需写上abstract
    //public abstract function start();

    //报错，接口中，不能有普通方法，全是抽象方法
    //public function test(){}

    public function start();
    public function end();
}

//接口不能被实例化
//$obj=new USB();//报错 Cannot instantiate interface USB

abstract class Mouse implements USB{
    public function start(){
        echo '鼠标亮了';
    }
}

//$obj=new Mouse();
//类实现接口，必须要实现接口中的所有方法签名，否则这个类只能是抽象类


interface USC{
    public function xxx();
}

class Foo implements USB,USC{
    public function start(){}
    public function end(){}
    public function xxx(){}
}

