<?php
/**
 * 魔术方法的封装
 * __get
 * __set
 * 将属性私有化，提供公开的__get和__set访问器
 * 只有__get访问器的，叫只读属性
 */
class Stu{
    private $name = 'jack';
    private $age  = 18;
    private $sex  = '男';

    /**
     * 可以自定义访问控制
     * @param $key
     * @return mixed
     */
    public function __get($key){
        /*
        if($key=='age'){
            return;
        }
        */
        return $this->$key;
    }

    public function __set($key,$value){
        $this->$key=$value;
        /*
        if($key=='age'){
            if($value<1 || $value>150){
                return;
            }
        }
        $this->$key=$value;
        */
    }

}

$stu=new Stu();
echo $stu->sex;  //可以获取私有属性，此时默认调用__get方法
$stu->sex='女';  //可以设置私有属性，此时默认调用__set方法
echo $stu->sex;

$stu->password = 123;
echo $stu->password; //访问没有的属性，也会调用__get()