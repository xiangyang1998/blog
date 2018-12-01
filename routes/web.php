<?php

Route::group(['namespace'=>'Admin'],function (){
    Route::get('admin','IndexController@index');
    Route::post('admin','IndexController@in');
    Route::get('admin/log','IndexController@log');
    Route::get('admin/ar','ArticleController@Ar');
    Route::get('admin/addarticle','ArticleController@ArAdd');
    Route::post('admin/addarticle','ArticleController@ArAddHandle');
    Route::post('admin/js','ArticleController@js');
    Route::get('admin/column','ColumnController@column');
    Route::post('admin/column','ColumnController@columnAdd');
    Route::post('admin/columndelete','ColumnController@ColumnDelete');
    Route::match(['get','post'],'admin/articleup/{id}','ArticleController@ArticleUp');
    Route::post('admin/articledelete','ArticleController@ArticleDelete');
    Route::match(['get','post'],'admin/caregoryupdate/{id}','ColumnController@CategoryUpdate');
    Route::post('admin/CategoryUpdateAdd','ColumnController@CategoryUpdateAdd');
    Route::get('admin/notice','NoticesController@notice');
    Route::match(['get','post'],'admin/noadd','NoticesController@NoAdd');
    Route::post('admin/nodalete','NoticesController@NoDelete');
    Route::match(['get','post'],'admin/comment','CommentsController@comment');
    Route::post('admin/commentdelete','CommentsController@CommentDelete');
});

 Route::group(['namespace'=>'Home'],function (){
     Route::get('/','IndexController@index');
     Route::match(['get','post'],'index/list/{id}','IndexController@list');
     Route::get('index/info','IndexController@info');
     Route::match(['get','post'],'index/info/{id}','IndexController@info');
     Route::get('index/tan','IndexController@tan');
     Route::get('index/shu','IndexController@che');
     Route::post('index/comment','IndexController@commentAdd');
     Route::post('index/che','IndexController@che');
 });


