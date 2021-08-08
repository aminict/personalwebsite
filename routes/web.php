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

Route::get('/', function () {
    return view('welcome');
});
// for page display
Route::get('/', 'contactController@welcome');
Route::get('/training', 'trainingController@training');
Route::get('/experience', 'experienceController@experience');
Route::get('/project', 'projectController@project');
Route::get('/testemonial', 'testemonialController@testemonial');
/*Route::get('/blog', function () {
    return view('blog');
    echo post::all();
});*/
Route::get('/allblog', 'categoryController@allblog');

//Route::get('admin/category/$id', 'categoryController@blog-single');
//Route::get('admin/post/{$id}', 'postController@show');
//Route::get('/blog-single', 'postController@blogsingle');
/*Route::get('/blog-single', function () {
    return view('blog-single');
});
*/
Route::get('/contact', 'contactController@contact');

//for login
/*Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');*/

Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('admin/login/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

// elequent for insert, delete, update
Route::resource('admin/experience','experienceController');
Route::resource('admin/project','projectController');
Route::resource('admin/training','trainingController');
Route::resource('admin/contact','contactController');
Route::resource('admin/testemonial','testemonialController');
Route::resource('admin/user','userController');
Route::resource('admin/usersms','usersmsController');
Route::resource('admin/category','categoryController');
Route::resource('admin/post','postController');

Route::resource('admin/slider','sliderController');





