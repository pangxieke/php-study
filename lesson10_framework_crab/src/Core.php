<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

/*系统目录操作符*/
define('DS', '/');

/*系统根目录*/
define('ROOT_PATH', APP_PATH);

/*系统核心库目录*/
define('CORE_PATH', ROOT_PATH . DS . 'src');

//配置文件
require CORE_PATH . DS . 'Config.php';

//公共函数文件
// require CORE_PATH . DS . 'Common.php';

//基类
// require CORE_PATH . DS . 'Base.php';

//包含Smarty类文件
require CORE_PATH . DS . 'smarty/Smarty.class.php';

// //控制器
// require CORE_PATH . DS . 'Controller.php';

// //数据库
// require CORE_PATH . DS . 'Db' . DS . 'Db.php';

// //模型
// require CORE_PATH . DS . 'Model.php';


//加载类库加载类
//require CORE_PATH . DS . 'Loader.php';

/*预加载系统内置类*/
//require CORE_PATH .DS.'import.php';

/*系统常量配置*/
//require CORE_PATH .DS.'defines.php';

//如果没有composer
require APP_PATH . '/src/ClassLoader.php';

//自动加载
//require APP_PATH . '/vendor/autoload.php';

Crab\ClassLoader::register();
