<?php
/**
 * 入口文件
 */

//调试开关
define('APP_DEBUG', true);
//当前应用程序根目录
define('APP_PATH', dirname(__FILE__));

require APP_PATH . '/config/Config.php';
/*加载系统核心包*/
require APP_PATH . '/src/core.php';

Crab\Base::app()->run();