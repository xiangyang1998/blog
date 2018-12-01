<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use Cache;


class CommentsController extends Controller
{
    //
    public   function  comment(){
        $rs=comment::get();
        $shujutiaoshu=count($rs);
        return view('Admin.comment',compact('rs','shujutiaoshu'));
    }
    public  function  CommentDelete(){
        $rs=$_POST['id'];
        $data=new comment();

        $re=$data::where('id',$rs)->delete();
        return $re;
    }
}
