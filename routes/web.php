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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','FrontController@index_galeri');

// Route::get('/admin/tambah_foto', function () {
//     return view('/admin/tambah_foto');
// });


Route::get('/admin/dashboard', 'HomeController@dash');

//Galeri
Route::get('/galeri','FrontController@galeri');
Route::get('/admin/tambah_foto','HomeController@tambah_foto');
Route::post('/admin/tambah_foto/upload', 'HomeController@upload_foto');
Route::get('/admin/list_foto', 'HomeController@list_foto');
Route::get('/admin/list_foto/hapus_foto/{id}', 'HomeController@hapus_foto');
Route::get('/admin/list_foto/edit_foto/{id}', 'HomeController@edit_foto');
Route::post('admin/list_foto/update_foto','HomeController@update_foto');


// Vidio
Route::get('/vidio','FrontController@vidio');
Route::get('/admin/tambah_vidio','HomeController@tambah_vidio');
Route::get('/admin/list_vidio','HomeController@list_vidio');
Route::post('/admin/list_vidio/upload_vidio','HomeController@upload_vidio');
Route::get('/admin/list_vidio/hapus_vidio/{id}', 'HomeController@hapus_vidio');
Route::get('/admin/list_vidio/edit_vidio/{id}', 'HomeController@edit_vidio');
Route::post('admin/list_vidio/update_vidio','HomeController@update_vidio');


// Tentang Kami
Route::get('/tentang_kami','FrontController@tentang');
Route::get('/admin/edit_tentangkami/{id}','HomeController@edit_kami');
Route::post('/admin/update_kami','HomeController@update_kami');


// pelanggan
Route::post('/pelanggan', 'FrontController@pelanggan');
Route::get('/admin/list_pelanggan', 'HomeController@list_pelanggan');


// Kontak
Route::get('/kontak','FrontController@hub');
Route::get('/admin/list_kontak','HomeController@list_kontak');
Route::get('/admin/list_kontak/edit_kontak/{id}','HomeController@edit_kontak');
Route::post('/admin/list_kontak/update_kontak','HomeController@update_kontak');


// Berita
Route::get('/berita','FrontController@berita');
Route::get('/berita/{id}','FrontController@detail_berita');
Route::get('/admin/list_berita','HomeController@list_berita');
Route::get('/admin/tambah_berita','HomeController@tambah_berita');
Route::get('/admin/edit_berita/{id}','HomeController@edit_berita');
Route::post('/admin/edit_berita/update','HomeController@update_berita');
Route::post('/admin/tambah_berita/upload','HomeController@upload_berita');
Route::get('/admin/hapus_berita/{id}','HomeController@hapus_berita');

// Sosmed
Route::get('/admin/list_sosmed','HomeController@list_sosmed');
Route::get('/admin/list_sosmed/edit_sosmed/{id}','HomeController@edit_sosmed');
Route::post('/admin/list_sosmed/update_sosmed','HomeController@update_sosmed');


// Testi
// Route::get('/','FrontController@index_testi');
Route::get('/admin/list_testi','HomeController@list_testi');
Route::get('/admin/tambah_testi','HomeController@tambah_testi');
Route::post('/admin/tambah_testi/update','HomeController@update_testi');
Route::post('/admin/tambah_testi/upload','HomeController@upload_testi');
Route::get('/admin/list_testi/edit_testi/{id}','HomeController@edit_testi');
Route::get('/admin/list_testi/hapus_testi/{id}','HomeController@hapus_testi');


// Sarkom
Route::post('/kontak/sarkom','FrontController@sarkom');
Route::get('/admin/list_sarkom','HomeController@list_sarkom');

Auth::routes(['register'=> false,'reset'=>false]);


