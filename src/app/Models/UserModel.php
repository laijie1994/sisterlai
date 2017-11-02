<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/11/2
 * Time: 16:27
 */

namespace app\Models;

use Server\CoreBase\Model;

class UserModel extends Model
{
    public function userInfo()
    {
        return ["name"=>"ellieshi","desc"=>"love u"];
    }
}