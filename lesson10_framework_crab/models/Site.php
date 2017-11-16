<?php

class Site extends \Crab\Model{

    public function getUserList()
    {
        $sql = "SELECT * FROM user";
        $res = $this->query($sql);
        var_dump($res);
    }
}