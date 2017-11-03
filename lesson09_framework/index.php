<?php

//包含配置文件
include './config/config.php';

//包含控制器基类
include './core/Controller.php';

//包含模型的基类
include './core/Model.php';

//接受参数，用来确定当前使用哪个控制器

$c = @$_GET['c'] ? ucfirst(strtolower($_GET['c'])) : DEFAULT_CONTROLLER;

//拼接控制器类名
$className = $c . 'Controller';

//包含控制器文件
include "./controllers/$className.php";

//实例化控制器对象
$controller = new $className();

//接受参数，确认当前访问那个动作
$a = @$_GET['a'] ? strtolower($_GET['a']) : DEFAULT_ACTION;

//初始化控制器
$controller->run();

//调用动作
$controller->$a();

