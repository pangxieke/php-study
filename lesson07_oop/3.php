<?php
/**
 * 对象的方法调用
 * 对象方法传递参数
 */

class Html{
    public function link($text,$url='#'){
        return "<a href='{$url}'>{$text}</a>";
    }

    public function inputField($type,$name,$value=''){
        $html="<input type='{$type}' name='{$name}' value='{$value}'>";
        return $html;
    }
}

$obj=new Html();
echo $obj->link('百度','http://www.baidu.com');

echo $obj->inputField('password' ,'pwd');

