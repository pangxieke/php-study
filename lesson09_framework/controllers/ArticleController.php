<?php

/**
 * Class ArticleController
 *
 * 建表语句
 * CREATE TABLE `article` (
        `id` INT(11) NOT NULL AUTO_INCREMENT,
        `title` VARCHAR(255) NULL DEFAULT '',
        `desc` VARCHAR(255) NULL DEFAULT '',
        `content` TEXT NULL,
        `add_time` INT(11) NULL DEFAULT '0',
        PRIMARY KEY (`id`)
    )
    COLLATE='utf8_general_ci'
    ENGINE=MyISAM;
 */
class ArticleController extends controller{

    public function create(){
        $name = 'I love you';
        $this->assign('name', $name);
        $this->display('article');
    }

    public function update(){
        echo "update Acticle";
    }

    public function list()
    {
        $sql = "SELECT * from article";

        $model = new Model();
        $list = $model->query($sql);

        $this->assign('list', $list);
        $this->display('article');
    }

}