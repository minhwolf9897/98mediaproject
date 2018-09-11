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

Route::get('/', function (){
    return view('pages.client.index');
 })->name('client.index');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'name' => 'admin'], function () {
    Route::get('/', 'PageController@adminDashboard')->name('admin.index');
    Route::get('/products/{category_id}', 'CategoryController@getProductsByCategoryId')->name('admin.category.products');
    Route::get('/products/{category_id}/create', 'ProductController@create')->name('admin.category.product_create');
    Route::resource('/category','CategoryController', ['as' => 'admin']);
    Route::resource('/product', 'ProductController', ['as' => 'admin']);
});

//Route::resource('product','ProductController');

//
//
Route::get('/photo', 'PageController@indexPhoto');

Route::get('/video', 'PageController@indexVideo');
Route::get('/design', function (){
    return view('pages.client.design    ');
});
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