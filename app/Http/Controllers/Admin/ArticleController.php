<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Column_surface;
use Cache;
use App\Article;

class ArticleController extends Controller
{
    //
    public function Ar()
    {
        $data = new article();
        $rs = $data->get();
        $shujutiaoshu = count($rs);
        return view('Admin.article', compact('rs', 'shujutiaoshu'));
    }

    public function ArAdd()
    {
        $ac = column_surface::get();
        return view('Admin.add_article', compact('ac'));
    }

    //处理接收到的文章Post请求
    public function ArAddHandle(Request $req)
    {
        $Atricle = Article::create([
            'title' => $req->title,
            'article' => $req->Article,
            'describe' => $req->describe,
            'keywords' => $req->keywords,
            'tags' => $req->tags,
            'titlepic' => $req->titlepic,
            'category' => $req->category
        ]);

        if ($Atricle) {
            return redirect('admin/ar');
        } else {
            return '失败';
        }
    }

    public function js()
    {

        $rs = $_POST['id'];
        $data = new article();
        $re = $data::where('id', $rs)->delete();
        return $re;
    }

    public function ArticleUp($id)
    {

        if (empty($_POST)) {
            $rs = article::where('id', $id)->first();
            $re = column_surface::get();
            return view('Admin.update_article', compact('rs', 're'));
        } else {
            echo '1111111111';
        }
    }

    public function ArticleDelete(Request $req)
    {
        $id = $req->id;
        $titlepic = $req->titlepic;//图片地址s
        if ($titlepic != null) {
            article::where('id', $id)->update(['title' => $req->title, 'article' => $req->Article, 'describe' => $req->describe, 'keywords' => $req->keywords, 'tags' => $req->tags, 'titlepic' => $req->titlepic, 'category' => $req->category]);
            return redirect('admin/ar');
        } else {
            article::where('id', $id)->update(['title' => $req->title, 'article' => $req->Article, 'describe' => $req->describe, 'keywords' => $req->keywords, 'tags' => $req->tags, 'category' => $req->category]);
            return redirect('admin/ar');
        }
    }
}
