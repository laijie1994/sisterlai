<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/11/2
 * Time: 16:17
 */

namespace app\Controllers;

use app\Models\UserModel;
use Server\CoreBase\Controller;

class UserController extends Controller
{
    /**
     * @var UserModel
     */
    public $UserModel;

    protected function initialization($controller_name, $method_name)
    {
        parent::initialization($controller_name, $method_name);
        $this->UserModel = $this->loader->model("UserModel",$this);
    }

    public function http_test()
    {
        $userInfo = $this->UserModel->userInfo();
        $this->http_output->end($userInfo);
    }
}