<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_user extends Model
{
    //
    protected $guarded=['user_name','user_password'];
}
