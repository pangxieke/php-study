<?php
/**
 * 批量给属性赋值 是很麻烦的
 */
//学员类
class Stu{

    //姓名
    public $name;
    //年龄
    public $age;
    //性别
    public $sex;
    //邮箱
    public $email;
    //地址
    public $address;

    //注意：每一个属性，必须写注释

}

$stu1=new Stu();
$stu1->name='张三';
$stu1->age=18;
$stu1->sex='男';
$stu1->email='zhangsan@gmail.com';
$stu1->address='火星';

var_dump($stu1);

//2
class Stu2{
    //姓名
    public $name;
    //年龄
    public $age;

    //构造方法，在类被new时自动调用
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    //析构方法，对象销毁时调用，可以通过unset，赋值false销毁，也会在文件末尾自动销毁
    public function __destruct(){
        echo $this->name . ': 轻轻的，我走了。<br>';
    }

}

$stu1 = new Stu2('jack',18);
var_dump($stu1);

//$stu1 = false;
echo '_destruct在文件末尾执行<br>';
//输出 _destruct在文件末尾执行 jack: 轻轻的，我走了。 说明__destruct是在整个文件末尾执行