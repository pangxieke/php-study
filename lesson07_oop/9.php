<?php
/**
 * 子类重写父的方法
 * parent:: 静态调用父类方法
 */

class A{
    public function test(){
        echo 'a';
    }
}

class B extends A{
    //重写A类的test()方法
    public function test(){
        echo 'b';
    }
}

$obj=new B();
$obj->test();

echo '<hr>';

// 版本V2
//如何调用父类中被子类覆盖的方法
class Person{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

class Student extends Person{
    public $grade;

    public function __construct($name, $age, $grade){
        parent::__construct($name,$age); //调用父类方法，在父类的方法上在增加代码，父类的代码还可以执行，不必完全重写
        //$this->name=$name;
        //$this->age=$age;
        $this->grade=$grade;
    }

}

$obj = new Student('小卫',18,2);
echo $obj->name;
echo $obj->grade;
