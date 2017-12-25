<?php
require_once 'BaseDAO.php';

class UserDAO extends BaseDAO
{
    protected $tableName = 'blog_user';

    protected $primaryKey = 'id';
}