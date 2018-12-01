<?php

namespace App\Http\Controllers\Admin;

use App\Admin_user;
use App\Comment;
use App\Visit;
use Illuminate\Http\Request;
use Cache;
use App\Article;

class IndexController extends UserController
{
    //
    public function index()
    {

        return view('Admin.index');
    }

    public function in(Request $req)
    {
        if (!empty($_POST)) {
            $username = $req->username;
            $password = $req->userpassword;
            $rs = admin_user::where('user_name', $username)->first();
            if ($rs) {
                if ($rs['user_password'] == $password) {
                    echo '成功';
                    cache::add('user_name', $username, '60');
                    cache::add('user_password', $rs['user_password'], '60');
                    return redirect('admin/log');
                } else {
                    echo '失败';
                }

            } else {
                echo '失败';
                return back()->withErrors(['你怕是用户账号和密码输错了哦',]);
            }
        } else {

        }

    }

    public function log()
    {
        if (cache::has('user_name')) {
            $user_name = cache::get('user_name');
            $user_password = cache::get('user_password');
            $rs = admin_user::where('user_name', $user_name)->first();

            if ($rs) {
                if ($rs['user_password'] == $user_password) {
                    $ip = $this->ip();
                    $data = new article();
                    $rs = $data->get();

                    $commejts = new comment();
                    $commejts = $commejts->get();
                    $commejts = count($commejts);

                    $visits = new visit();
                    $visits = $visits->get();
                    $visits = count($visits);

                    $shujutiaoshu = count($rs);
                    return view('Admin.main', compact('user_name', 'ip', 'shujutiaoshu', 'commejts', 'visits'));
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

    public function ip()
    {

        if (getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif (getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
            $ip = getenv('REMOTE_ADDR');
        } elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $res = preg_match('/[\d\.]{7,15}/', $ip, $matches) ? $matches [0] : '';
        return $res;

    }


}