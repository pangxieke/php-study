<?php
require_once './config.php';

$link = mysqli_connect (DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);

//判断是否连接成功
if (!$link) {
	echo "Failed to connect to MySQL";
	exit;
}
mysqli_select_db ($link, DB_DATABASE);
mysqli_set_charset($link, DB_CHARSET);