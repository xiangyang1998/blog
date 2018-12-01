<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column_surface extends Model
{
    //
    protected  $fillable=[
        'column','column_another_name','keyword','describe'];
    public  function  Article(){
        return $this->belongsTo('App\Article','id','id');
    }
}
