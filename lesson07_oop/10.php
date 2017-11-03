<?php
/**
 * 静态化调用对象
 * 通常我们通过new 实例化对象
 * 我们也可以通过 :: 调用 静态（static)对象和方法
 * 静态方法，就是里面没有使用$this-> 伪变量
 * new对象和静态对象，在内存中存储空间不一样。静态对象调用速度更快
 *
 * 使用关键字static
 * parent:: 静态调用父类方法
 * self:: 静态调用自己的方法
 */

class Person{

    public static $name = 'default';
    public static $sex = '未知';

    public static function setName($name){
        self::$name = $name;
    }
}

echo Person::$name;
echo Person::$sex;

echo '<br>';
Person::setName('pangxie');
echo Person::$name;
echo Person::$sex;


//版本V2
class Student extends Person{

    public static function setName($name){
        parent::setName($name);
    }

    /**
     * self //静态调用自己的方法
     * @param $name
     */
    public static function getName($name)
    {
        self::setName($name);
    }
}

echo '<hr>';
echo Student::$name;//pangxie 静态类在内存中共享，所以还可以得到
Student::setName('张三');
echo '<br>';
echo Student::$name;

Student::getName('李四');
echo '<br>';
echo Student::$name;