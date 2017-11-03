<?php
class ArticleController extends controller{

    public function create(){
        $name = 'I love you';
        $this->assign('name', $name);
        $this->display('article');
    }

    public function update(){
        echo "update Acticle";
    }

}