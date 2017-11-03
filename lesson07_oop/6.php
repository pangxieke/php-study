<?php

/**
 * 访问修饰符
    public			protected			private
    本类	yes				yes					yes
    子类	yes				yes					no
    外部	yes				no					no
 */

class Person{
    public $name='无名氏';
    protected $age=1;

    private $sex = '女';

    public function say(){
        echo "大家好，我是{$this->name},今年{$this->age}岁<br>";
        echo '我的性别' . $this->sex;
    }


}

header("Content-Type:text/html;charset=utf-8");
$stu=new Person();
$stu->say();

$stu->name = '张三';
//$stu->age=-5; //Fatal error: Uncaught Error: Cannot access protected property Person::$age
//$stu->sex = '男'; //Fatal error: Uncaught Error: Cannot access private property Stu::$sex
$stu->say();

/**
 * 继承 extends
 * 封装
 * 父类中的属性和方法，子类自动拥有
    class 子类名 extends 父类名{}
    一个类，只能继承一个父类

    继承了一个类，将自动拥有父类的所有属性方法，但不能直接调用private的属性和方法
 */
class Stu extends Person{

    public function setSex($sex){
        $this->sex = $sex;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public function getSex(){
        return $this->sex;
    }
}

$stu2 = new Stu();
$stu2->setAge('18');
$stu2->setSex('人妖'); //私有属性 设置失败
$stu2->say();
echo '<hr>';
echo $stu2->getAge();
echo '<hr>';
echo $stu2->getSex();