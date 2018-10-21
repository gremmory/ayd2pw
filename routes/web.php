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
    //return view('welcome');
    return view('layouts/master');
});

Route::get('/principal', function () {
    //return view('welcome');
    return view('principal');
});

Route::get('/user/updateprofile', function () {
    //return view('welcome');
    return view('users/update');
});
/*
Route::get('/user/create', function () {
    //return view('welcome');
    return view('users/create');
});
*/
Route::get('/publication', function () {
    //return view('welcome');
    return view('publication/create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/user/update', 'UpdateUser@update_user')->name('update');


Route::resource('publications', 'PublicationsController')->only([
    'index', 'show'
]);

Route::resource('mypublications', 'MyPublicationsController')->only([
    'index', 'show', 'destroy', 'edit', 'create', 'store'
]);

Route::post('publications/store', 'PublicationsController@insert');

Route::resource('rank/update', 'RankController')->only([
    'update'
]);

Route::post('rank/update', 'RankController@update');

//Route::get('mypublications/{$id}', 'PublicationsController@show');//get publications for user
//Route::get('publications', 'PublicationsController@my_publications');
//Route::get('mypublications', ['uses' => 'PublicationsController@my_publications']);//get publications for user

//Route::get('mypublications/{$id}', 'PublicationsController@showmy')->name('mypublications.showtag');

//Route::get('mypublications/', ['uses' => 'PublicationsController@index']);