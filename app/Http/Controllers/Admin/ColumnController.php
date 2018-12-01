<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Column_surface;
use Cache;


class ColumnController extends Controller
{
    //
    public function column()
    {
        $data = new column_surface();
        $shu = $data->get();
        $i = 1;
        $shujutiaoshu = count($shu);
        return view('Admin.category', compact('shu', 'shujutiaoshu'));
    }

    public function columnAdd(Request $req)
    {
        $Column_surface = Column_surface::create([
            'column' => $req->name,
            'column_another_name' => $req->alias,
            'keyword' => $req->keywords,
            'describe' => $req->describe
        ]);

        if ($Column_surface) {
            return redirect('admin/column');
        } else {
            return '失败';
        }
    }

    public function ColumnDelete()
    {
        $rs = $_POST['id'];
        $data = new column_surface();
        $re = $data::where('id', $rs)->delete();
        return $re;
    }

    public function CategoryUpdate($id)
    {
        if (empty($_POST)) {
            $rs = column_surface::where('id', $id)->first();
            return view('Admin.update_category', compact('rs'));

        }

    }

    public function CategoryUpdateAdd(Request $req)
    {
        $id = $req->id;
        $column = $req->name;
        $column_another_name = $req->alias;
        $keyword = $req->keywords;
        $describe = $req->describe;
        column_surface::where('id', $id)->update(['column' => $column, 'column_another_name' => $column_another_name, 'keyword' => $keyword, 'describe' => $describe]);
        return redirect('admin/column');

    }
}
