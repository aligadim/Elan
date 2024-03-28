<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/test',function(){
        return view('test');
        })->name('test');
Route::get('/home','App\Http\Controllers\homeController@index')->name('home');
Route::get('/single','App\Http\Controllers\homeController@single')->name('single');
Route::get('/profil','App\Http\Controllers\profilController@index')->name('profil');
Route::post('/profil','App\Http\Controllers\profilController@profil_update')->name('profil_update');

Route::group(['middleware'=>'notlogin'],function(){

        Route::get('/city','App\Http\Controllers\CityController@index')->name('city');
        Route::post('/city','App\Http\Controllers\CityController@city')->name('city_data');
        Route::get('/edit_city/{id}','App\Http\Controllers\CityController@edit_city')->name('edit_city');
        Route::post('/update_city/{id}','App\Http\Controllers\CityController@update_city')->name('update_city');
        Route::get('/city_sil/{id}','App\Http\Controllers\CityController@city_sil')->name('city_sil');
        Route::get('/city_del/{id}','App\Http\Controllers\CityController@city_del')->name('city_del');


        Route::get('/elan','App\Http\Controllers\elanController@index')->name('elan');
        Route::post('/elan','App\Http\Controllers\elanController@elan')->name('elan_data');
        Route::get('/elan_edit/{id}','App\Http\Controllers\elanController@elan_edit')->name('elan_edit');
        Route::post('/elan_update/{id}','App\Http\Controllers\elanController@elan_update')->name('elan_update');
        Route::get('/elan_sil/{id}','App\Http\Controllers\elanController@elan_sil')->name('elan_sil');
        Route::get('/elan_del/{id}','App\Http\Controllers\elanController@elan_del')->name('elan_del');
        Route::get('/activ/{id}','App\Http\Controllers\elanController@activ')->name('activ');
        Route::get('/legv/{id}','App\Http\Controllers\elanController@legv')->name('legv');
        Route::post('/fileStore','App\Http\Controllers\elanController@fileCreate')->name('fileStore');
        Route::get('/fileDestroy','App\Http\Controllers\elanController@fileDestroy')->name('fileDestroy');


        Route::get('/kategoria','App\Http\Controllers\CategoryController@index')->name('kategoria');
        Route::post('/kategoria','App\Http\Controllers\CategoryController@kategoria')->name('kategoria_data');
        Route::get('/edit/{id}','App\Http\Controllers\CategoryController@edit')->name('edit');
        Route::post('/update/{id}','App\Http\Controllers\CategoryController@update')->name('kategoria_edit');
        Route::get('/sil/{id}','App\Http\Controllers\CategoryController@sil')->name('sil');
        Route::get('/delete/{id}','App\Http\Controllers\CategoryController@delete')->name('delete');
        Route::get('/logout','App\Http\Controllers\loginController@logout')->name('logout');
});

Route::group(['middleware'=>'islogin'], function(){
        
        Route::get('/user','App\Http\Controllers\userController@index')->name('user');
        Route::post('/user','App\Http\Controllers\userController@user')->name('user_data');

        Route::get('/','App\Http\Controllers\loginController@index')->name('login');
        Route::post('/login','App\Http\Controllers\loginController@login')->name('login_data');
});