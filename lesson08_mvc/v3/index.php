<?php

/**
 * Class Mytpl
 */
class Mytpl{

    public $vars = array();

    public function setAttribute($name, $user, $old){
        $this->vars['name'] = $name;
        $this->vars['user'] = $user;
        $this->vars['old'] = $old;
    }

    public function display($tpl){
        $name = $this->vars['name'];
        $user = $this->vars['user'];
        $old = $this->vars['old'];
        include $tpl;
    }

}

$one = new Mytpl();

$name = 'this is v4';
$user = 'pangxie';
$old = '18';
//传递值
$one->setAttribute($name, $user, $old);

$one->display("./view_index.php");