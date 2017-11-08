<?php
/**
 * 入口文件
 */

//当前应用程序根目录
define('APP_PATH', dirname(__FILE__));

/*加载系统核心包*/
require APP_PATH . '/src/core.php';

Crab\Base::app()->run();