<?php
include './Controller.php';
include './Model.php';

$con = new Controller();

//不传参数，访问index页面，否则访问 page参数的页面 ?page=list
$page = @$_GET['page'] ? $_GET['page'] : 'index';

$con->$page();