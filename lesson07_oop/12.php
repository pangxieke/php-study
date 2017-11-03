<?php
/**
 * 单例模式, 又叫单态模式
 * 1. 将构造方法__construct私有化private (确保在外面不能直接new出对象)
 * 2. 提供一个静态方法，用来返回对象
 * 3. 在这个方法中，判断是否已经new出对象了，有则直接返回，没有则先new一个
 * 4. 保存在一个静态属性中
 *
 * 单例模式常用与数据库的连接，这样能够保证只有一个连接到数据库，节省资源
 */

class Foo{

    private static $obj = null;

    private function __construct(){}

    public static function getObject(){

        if(self::$obj === null){
            self::$obj=new self();
        }
        return self::$obj;
    }

}

$obj1 = Foo::getObject();
$obj2 = Foo::getObject();

if($obj1===$obj2){
    echo '是同一个对象';
}else{
    echo '是不同的对象';
}


//数据库操作类

class DB{
    private static $link = null;

    private function __construct()
    {

    }

    private static function init(){
        self::getObject();
    }

    public static function getObject(){
        if(self::$link === null){
            self::$link = self::getLink();
        }
        return self::$link;
    }

    public static function getLink(){
        $dsn='mysql:host=localhost;dbname=test;port=3306';
        $link = new PDO($dsn,'root','');
        if(!$link){
            echo 'error';exit;
        }
        return $link;
    }

    public static function query($sql){
        self::init();
        $link = self::$link;
        $query = $link->prepare($sql);
        $query->execute();

        for($i=0; $row = $query->fetch(); $i++){
            var_dump($row);
        }
    }
}

$sql = "select * from table1";
DB::query($sql);

/**
    CREATE TABLE `table1` (
        `id` INT(11) NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(50) NULL DEFAULT NULL,
        `sex` VARCHAR(50) NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    )
    COLLATE='utf8_general_ci'
    ENGINE=MyISAM;

 * INSERT INTO `test`.`table1` (`username`, `sex`) VALUES ('zhanshan', 'men');
 * INSERT INTO `test`.`table1` (`username`, `sex`) VALUES ('orange', 'nv');
 */
