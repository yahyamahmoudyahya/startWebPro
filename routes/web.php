<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
//    $data=[];
//    $data['id']=1997;
//    $data['name']='Laravel';
//    $data['city']='Gaza city';
//    return view('welcome',$data);
    return 'welcome';
});
Route::group(['namespace'=>'Yahya'],function (){
    Route::get('sham','YahyaController@view');
    Route::get('sham2','YahyaController@view2');
    Route::get('sham3','YahyaController@view3');
    Route::get('sham4','YahyaController@view4');
    Route::get('sham1','FirstController@view');
});

Route::resource('start','ResourceController'); // to implement all method in StartController class
Route::resource('start1','StartController'); // to implement all method in StartController class
Route::post('store','StoreStudent@store')->name('store');
Route::get('creat','StoreStudent@creat');
Route::get('demo','StoreStudent@demo');

