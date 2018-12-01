<?php

namespace App\Http\Controllers\Home;

use App\Article;
use App\Column_surface;
use App\Comment;
use App\Notice;
use App\Visit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $rs = column_surface::get();
        $ac = article::get();
        $re = notice::inRandomorder()->take(4)->get();
        return view('Home.index', compact('rs', 'ac', 're'));
    }

    public function get()
    {
        return view('Home.list');
    }

    public function list($id)
    {
        $rs = article::where('category', $id)->get();
        return view('Home.list', compact('rs'));
    }

    public function info($id)
    {
        $re = article::where('id', $id)->get();
        $ac = article::inRandomorder()->take(4)->get();
        $rs = article::inRandomorder()->take(9)->get();
        $co = comment::where('article', $id)->get();
        $cs = visit::where('article_id', $id)->get();
        $shujutiaoshu = count($cs);
        return view('Home.info', compact('re', 'ac', 'rs', 'id', 'co', 'shujutiaoshu'));
    }

    public function tan()
    {
        return view('Home.bullet_screen');
    }

    public function commentAdd(Request $req)
    {
        $data = new comment();
        $article = $req->id;
        $comment_content = $req->tir;
        $data->article = $article;
        $data->comment_content = $comment_content;
        $rs = $data->save();
        return redirect('index/info/' . $article);
    }

    public function che(Request $req)
    {
        $data = new visit();
        $fingerprint = $req->result;
        $article_id = $req->id;
        $data->article_id = $article_id;
        $data->fingerprint = $fingerprint;
        $rs = $data->save();
        return $rs ? 'OK' : '失败';
    }
}
