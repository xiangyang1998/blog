<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable=['article',
        'comment_content',
        'name'];
    public  function Article(){
        return $this->belongsTo('App\Article','article_id','id');
    }
}
