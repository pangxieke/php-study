<?php
use Crab\Controller;
class SiteController extends Controller
{
    public function index()
    {
        $hello = 'hello world';
        
        $this->assign('hello', $hello);
        $this->display();

//        include './models/Site.php';
//        $model = new Site();
//        $model->getUserList();
    }
}