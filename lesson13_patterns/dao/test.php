<?php
require_once 'UserDAO.php';

$arr = [
    'id' => 17,
    'username' => 'pangxieke',
    'modified' => time(),
];

$userObj = new UserDAO();
$userObj->update($arr);