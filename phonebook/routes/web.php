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
    return view('welcome');
});

Route::group(['middleware' =>['web']],function(){
    Route::get('/contacts','ContactsController@index');
    Route::get('/contacts/insert','ContactsController@insert');

    Route::post('/contacts','ContactsController@store');

    Route::get('contacts/{contacts}/edit','ContactsController@edit');
    Route::patch('contacts/{contacts}','ContactsController@update');
    Route::get('contacts/{contacts}/delete','ContactsController@destroy');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
