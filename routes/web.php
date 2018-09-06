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

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'name' => 'admin'], function () {
    Route::get('/', function() {
        return view('pages.admin.dashboard');
    })->name('admin.index');

    Route::resource('/category','CategoryController', ['as' => 'admin']);
    Route::resource('/product', 'ProductController', ['as' => 'admin']);
});

//Route::resource('product','ProductController');

//
Route::get('/', function (){
   return view('pages.client.index');
});
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


//Route::group(['prefix'=>'admin', 'name'=>'admin'], function() {
//    Route::resource('photo', 'PhotoController', ['as' => 'admin']);
//});

//Route::get('/quanly', 'HomeController@index')->name('home');