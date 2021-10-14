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
Route::get('login-user',function (){return view('login');});
Route::get('register-user',function (){return view('register');});
//forget-----------------------------------------------------------------
Route::get('forget-password',function (){return view('forgetPassword');});
Route::post('forgetPassword','usersControl@forgetPassword');

Route::get('reset-password',function (){return view('resetPassword');});
//-------------------------------------------------------------------------
// Route::get('object',function (){return view('object');});
Route::get('/',function (){return view('index');});
// Route::get('search-lost-things',function (){return view('searchPage');});
Route::post('login','usersControl@login');
Route::post('register','usersControl@register');
Route::get('search',function (){ return view('search'); });
Route::get('categories','usersControl@getCategories');
Route::get('getAllPosts','usersControl@gap');
Route::get('out-post/{id}','usersControl@getPost');
Route::get('posts',function(){return view('posts');})->name('posts');
Route::group(['middleware'=>['user_Login']],function (){
    Route::get('user-dashboard',function (){return view('dashboard');});
    Route::get('buy-packages',function (){return view('buy_packages');});
    Route::get('report-lost',function (){return view('lost');});
    Route::get('report-found',function (){return view('found');});
    Route::get('report/{type}','usersControl@report');
    Route::get('report',function (){return view('report');})->name('report.objects');
    Route::post('postReport','usersControl@postReports');
    Route::get('my-posts',function (){return view('mypost');})->name('my-post');
    Route::get('chat-room',function(){return view('chat');})->name('chat-room');
    Route::post('sendMessage','usersControl@room');
    Route::get('delete/{post_id}','usersControl@delete');

  


   // Route::resource('user','peopleControl');

});
