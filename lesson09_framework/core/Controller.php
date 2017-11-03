<?php
//控制器基类

class Controller {

    public $vars = array();

    public function run(){
        //set模板默认目录
        //set编译目录
        //set 缓存目录
    }

    public function display($tpl){
        extract($this->vars);
        include '/views/' . $tpl . 'html';
    }

    public function assign($key, $value){
        $this->vars[$key]=$value;
    }

}