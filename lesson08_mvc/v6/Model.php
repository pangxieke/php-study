<?php
class Model{

    public function getUserList(){
        $userList = [
            [
                'username' => '张三',
                'sex' => 18,
            ],
            [
                'username' => '周星驰',
                'sex' => 18,
            ],
            [
                'username' => '王丹',
                'sex' => 18,
            ],
            [
                'username' => '莉莉',
                'sex' => 20,
            ],

        ];
        return $userList;
    }
}