<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //
    protected $fillable=['fingerprint',
        'article_id',
        'page',];
}
