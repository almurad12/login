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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin', 'Admin\LoginController@login');

// // route trying practise
// Route::get('murad',function(){
//     return 'Hellow murad';
// });
// // Route::redirect('/home', '/murad',301);
// Route::permanentRedirect('/home', '/murad',301);
// // try
// Route::get('/murad',function(){
//     $name=10;
//     return view('murad',['myname'=>$name]); 
// });
Route::get('insert/{id}','TryController@try');
// Route::post('show/{name}','TryController@another');

// this is for resourse controller route
Route::resource('photos', 'PhotoController');

