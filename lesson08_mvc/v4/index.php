<?php

/**
 * Class Mytpl
 */
class Mytpl{

    public $vars = array();

    public function assign($key, $value){
        $this->vars[$key]=$value;
    }

    public function display($tpl){
//        $name = $this->vars['name'];
//        $user = $this->vars['user'];
//        $old = $this->vars['old'];

        extract($this->vars); //$this->vars数组中key转换为变量名，value转为变量值
        include $tpl;
    }

}

$one = new Mytpl();

$name = 'this is v3';
$user = 'pangxie';
$old = '18';
//传递值
$one->assign('name', $name);
$one->assign('user', $user);
$one->assign('old', $old);

$one->display("./view_index.php");