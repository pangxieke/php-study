<?php

/**
 * Class Mytpl
 */
class Controller{

    public $vars = array();

    public function assign($key, $value){
        $this->vars[$key]=$value;
    }

    public function display($tpl){
        extract($this->vars);
        include $tpl;
    }

    public function index()
    {

        $name = 'this is v6';
        $user = 'pangxie';
        $old = '18';

        $one = new self();
        //传递值
        $one->assign('name', $name);
        $one->assign('user', $user);
        $one->assign('old', $old);

        $one->display("./view/index.php");
    }

    public function list()
    {
        $name = 'this is list';
        $data = new Model();
        $userList = $data->getUserList();

        $one = new self();
        //传递值
        $one->assign('name', $name);
        $one->assign('userList', $userList);

        //加载不同tpl模板
        $one->display("./view/list.php");
    }

}

