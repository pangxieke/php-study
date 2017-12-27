<?php

/**
 * 数据访问对象模式
 *
 * Class BaseDAO
 */
class BaseDAO{

    private $connect;

    public function __construct()
    {
        $this->connectToDB('root', '', 'localhost', 'yii_blog');
    }

    public function connectToDB($user, $pass, $host, $database)
    {
        $this->connect = mysqli_connect($host, $user, $pass);
        mysqli_select_db($this->connect, $database);
    }

    public function update($filedsArr)
    {
        $sql = "Update {$this->tableName} set ";

        $updates = [];

        foreach ($filedsArr as $column => $value){
            $updates[] = " {$column} = '$value' ";
        }
        $sql .= implode(',', $updates);
        $sql .= " Where {$this->primaryKey} = '{$filedsArr[$this->primaryKey]}' ";

        mysqli_query($this->connect, $sql);
    }
}