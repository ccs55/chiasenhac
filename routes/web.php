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

Route::get('/', function () {
    return view('guest.welcome');
});

Auth::routes();

// Route
Route::get('/home', 'HomeController@index')->name('home');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/home', 'HomeController@index')->name('home');
// });

// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware('level');


Route::middleware(['level'])->group(function () {
    Route::group(['prefix'=>'/admin'],function(){   
        Route::get('/',function(){ return view('admin.index'); });
        Route::resource('/singer', 'CasiController'); 
        Route::resource('/song', 'SongController'); 
        Route::resource('/video', 'VideoController'); 
    });
});

Route::get('/404',function(){ return view('guest.404'); });
Route::get('/album',function(){ return view('guest.album'); });
Route::get('/artist',function(){ return view('guest.artist'); });
Route::get('/band',function(){ return view('guest.band'); });
Route::get('/blog',function(){ return view('guest.blog'); });
Route::get('/blog1',function(){ return view('guest.blog1'); });
Route::get('/contact',function(){ return view('guest.contact'); });
Route::get('/favourist',function(){ return view('guest.favourist'); });
Route::get('/fetch',function(){ return view('guest.fetch'); });
Route::get('/fetch2',function(){ return view('guest.fetch2'); });
Route::get('/header2',function(){ return view('guest.header2'); });
Route::get('/header3',function(){ return view('guest.header3'); });
Route::get('/header4',function(){ return view('guest.header4'); });
Route::get('/index',function(){ return view('guest.index'); });
Route::get('/radio',function(){ return view('guest.radio'); });
Route::get('/single',function(){ return view('guest.single'); });