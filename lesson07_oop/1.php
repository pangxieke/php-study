<?php
/**
 * 定义一个人类
 * 类名 不区分大小写，建议大写
 * 同时一个文件最好一个类，文件名与类名相同。这样看见文件名，就知道类名
 * 访问控制符 public protected private
 * 调用对象的方法:$对象引用名->方法名();
 */
class Person{
    //属性
    public $name;   //public可以省略，但不推荐
    public $sexn = 'women';  //可以给初始值
    var $age; //前用var定义属性，现在不使用


    //方法
    public function run(){
        echo '正在跑';
    }
    public function say(){
        echo '大家好';
    }
}

//实例化一个类
$one = new Person();
//也可以写成 new Person 在new对象时，类名后面的()可以不写，推荐写上

//查看类型
var_dump($one);

//调用方法
$one->run();

