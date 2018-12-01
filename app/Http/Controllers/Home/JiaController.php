<?php

namespace App\Http\Controllers\Home;

use Hashids\Hashids;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class JiaController extends Controller
{
    //
    public  function  index(){

      $rs=Hash::make(1111);

     if(Hash::check('1111',$rs)){
         echo '相等';
          echo $rs;
     }else{
         echo '不相等';
     }
    }
}
