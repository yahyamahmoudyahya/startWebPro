<?php

Route::get('/test1/{id}', function ($id) {
    return $id  ;
})->name('a');

Route::get('/test2/{id?}', function () {
    return 'welcom'  ;
})->name('b');

Route::group(['prefix'=>'user','middleware'=>'auth'],function (){
    Route::get('/',function (){
        return 'worked';
    });
    Route::get('sigin',function (){
        return 'sigin';
    });
    Route::get('sigup',function (){
        return 'sigup';
    });
    Route::get('list',function (){
            return ['1'=>'ahmed','2'=>'ahmed','3'=>'ahmed','4'=>'ahmed','5'=>'ahmed','6'=>'ahmed',];
        });
    Route::get('delete',function (){
            return 'deleted';
        });
});

