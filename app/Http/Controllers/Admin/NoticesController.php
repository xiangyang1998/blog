<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;
use Cache;


class NoticesController extends Controller
{
    //
    public function notice()
    {
        $rs = notice::get();
        $shujutiaoshu = count($rs);
        return view('Admin.notice', compact('rs', 'shujutiaoshu'));
    }

    public function NoAdd(Request $req)
    {
        if (empty($_POST)) {
            return view(('Admin.add_notice'));

        } else {
            $Notice = Notice::create([
                'title' => $req->title,
                'text' => $req->text,
                'picture_bad' => $req->Picture_bed,
                'describe' => $req->describe
            ]);
            if ($Notice) {
                return redirect('admin/notice');
            } else {
                echo '失败';
            }
            // dd($req);
        }

    }

    public function NoDelete()
    {
        $rs = $_POST['id'];
        $data = new notice();
        $re = $data::where('id', $rs)->delete();
        return $re;
    }
}
