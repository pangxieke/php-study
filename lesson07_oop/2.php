<?php
/**
 * 定义一个类: 学生类
 * 给对象的属性赋值
 */
class Student{
    //属性
    public $name;
    public $sex;

    //方法
    public function run(){
        echo '正在跑';
    }
}

//知识点1、通过类，实例化对象
$stu1=new Student();

//知识点2、给属性赋值
$stu1->name = '螃蟹';
$stu1->sex = '男';
echo "对象stu1的name属性值是$stu1->name";
var_dump($stu1);

echo '<hr>';

//知识点3、同一个类可以多次实例化
$stu2=new Student();
$stu2->name = '王五';
$stu2->sex = '女';

var_dump($stu2);
if($stu1 == $stu2){
    echo '$stu1 == $stu2';
}else{
    echo '$stu1 != $stu2';
}
echo '<br>';

// 知识点4、两个实例化对象不是同一个对象，是2个对象，不完全相等

$new1 = new Student();
$new2 = new Student();

if($new1 == $new2){
    echo '$new1 == $new2';
}else{
    echo '$new1 != $new2';
}
echo '<br>';

if($new1 === $new2){
    echo '$new1 === $new2';
}else{
    echo '$new1 !== $new2';
}


