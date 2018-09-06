<?php



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

Route::resource('admin/category','CategoryController');
Route::resource('admin/product', 'ProductController');

//Route::resource('product','ProductController');

//
//Route::get('/', function (){
//    return view('Client.form');
//});
//
//Route::get('/photo', function (){
//    return view('Client.photo');
//});
//
//Route::get('/video', function (){
//    return view('Client.video');
//});
//
//Route::get('/design', function (){
//    return view('Client.design');
//});
//Route::get('/Admin', function (){
//    return view('Admin.dashboard');
//});

//Auth::routes();

//Route::group(['prefix'=>'admin', 'name'=>'admin'], function() {
//    Route::resource('photo', 'PhotoController', ['as' => 'admin']);
//});

//Route::get('/quanly', 'HomeController@index')->name('home');