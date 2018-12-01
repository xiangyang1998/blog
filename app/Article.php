<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable=[
        'title','article','describe','keywords','tags', 'titlepic','category','img'];

    public function Comment(){
      return $this->hasMany('App\Comment','id','article_id');
  }
  public  function  Column_suface(){
        return $this->hasMany('App\Column_surface','id','id');
  }
}
