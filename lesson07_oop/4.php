<?php
/**
 * $this伪变量的使用
 */

class Stu{
    public $name;

    public function say(){
        //echo "大家好,我是{$name}";
        //局部变量$name 由于没有局部变量$name,所以没有值

        echo "大家好，我是{$this->name}。";
    }

}

$stu1=new Stu();
$stu1->name='小西';
$stu1->say();
echo '<hr>';

$stu2=new Stu();
$stu2->name = '慧';
$stu2->say();
echo '<hr>';

//报错   $this伪变量只能在类的方法中有效
//echo "大家好，我是{$this->name}。";


