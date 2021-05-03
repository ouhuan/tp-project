<?php
namespace app\admin\controller;

class Login extends \think\Controller
{
    public function login()
    {   
        $this->view->engine->layout(false);
        return view();
    }
}
