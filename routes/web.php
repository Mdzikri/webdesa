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

Route::get('/', 'PageController@index');
Route::get('/profile/sejarah', 'PageController@sejarah')->name('sejarah');
Route::get('/profile/lokasi', 'PageController@lokasi');
Route::get('/perangkat', 'PageController@perangkat');
Route::get('/visimisi', 'PageController@visimisi');
Route::get('/lembaga', 'PageController@lembaga');
Route::get('/surat', 'PageController@surat');
Route::post('/artikel/post' , 'HomeController@create_post')->name('postArtikel');
Route::put('/artikel/edit/{id}' , 'HomeController@edit_post');
Route::delete('/artikel/delete/{id}' , 'HomeController@delete_post');

Route::get('/artikel/{slug}' , 'PageController@view_post');
Route::get('/artikel/' , 'PageController@all_post');

Route::post('/artikel/kategori/create' , 'HomeController@create_kategori')->name('postKategori');
Route::put('/artikel/kategori/{id}/edit' , 'HomeController@edit_kategori');
Route::delete('/artikel/kategori/{id}/delete' , 'HomeController@delete_kategori');


Route::get('/data', 'DataController@index');
Route::get('/v_data', 'DataController@view');
Route::get('/c_data','DataController@create')->name('c_data');
Route::post('/save','DataController@store')->name('save');
Route::get('/u_data/{id}','DataController@edit')->name('u_data');
Route::post('/update_data/{id}','DataController@update')->name('update_data');
Route::get('/delete_data/{id}','DataController@destroy')->name('delete_data');







Auth::routes();

Route::get('/dashboard', 'HomeController@index');
Route::get('/dashboard/artikel', 'HomeController@artikel');
Route::get('/dashboard/artikel/all', 'HomeController@artikel_all');

Route::get('/dashboard/kategori/all', 'HomeController@artikel_kategori')->name('kategori_all');


