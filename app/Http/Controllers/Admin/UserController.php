<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_user;

class UserController extends Controller
{
    //
    public function Limit()
    {
        if (cache::has('user_name')) {
            $user_name = cache::get('user_name');
            $user_password = cache::get('user_password');
            $rs = admin_user::where('user_name', $user_name)->first();

            if ($rs) {
                if ($rs['user_password'] == $user_password) {

                } else {
                    echo '错误';
                }

            } else {
                echo '错误';
            }

        } else {
            echo '错误';
        }

    }
}