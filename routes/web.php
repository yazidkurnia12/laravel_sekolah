<?php

use App\Http\Controllers\AuthContrller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
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

Route::get('/blog', function(){
    return view('sites.blog');
});

Route::get('/', 'SiteController@home');
Route::get('/register', 'SiteController@registration')->name('register');
Route::post('/postregister', 'SiteController@postregistration');



Route::get('/login', 'AuthContrller@login')->name('login');
Route::post('/post/login/', 'AuthContrller@postlogin');
Route::get('/auth/logout/', 'AuthContrller@logout')->name('logout')->middleware('auth');

/** 
 * Route::group(['middleware' => 'auth'], function{}) 
 * -> berfungsi untuk membungkus route tertentu kedalam helper laravel
 * */
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () { // check:role admin berarti route hanya bisa diakses oleh admin
    Route::get('/siswa/', 'SiswaController@index')->middleware('auth');
    Route::post('/siswa/create/', 'SiswaController@create')->middleware('auth');
    Route::get('/siswa/{siswa}/edit', 'SiswaController@edit')->middleware('auth');
    Route::post('/siswa/{siswa}/update', 'SiswaController@update');
    Route::get('/siswa/profile/{siswa}/', 'SiswaController@profile');
    Route::get('/siswa/{siswa}/delete/', 'SiswaController@delete');
    Route::post('/siswa/{siswa}/addNilai/', 'SiswaController@addNilai');
    Route::get('/siswa/{siswa}/{idmapel}/delete', 'SiswaController@deleteNilai');
    Route::get('/guru/{guru}/profile', 'GuruController@profile');
    Route::get('/siswa/export', 'SiswaController@export');
    Route::get('/siswa/export/pdf/', 'SiswaController@exportPdf');
    Route::get('/news', 'PostController@index');
    Route::get('/post/add', 'PostController@add')->name('post.add');
    Route::post('/post/create', 'PostController@create')->name('post.create');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa']], function () { // check:role admin,siswa berarti route bisa diakses oleh admin dan siswa
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
});

// route prety url
Route::get('/{slug}', [
    'uses' => 'SiteController@singlepost',
    'as' => 'site.single.post'
]);