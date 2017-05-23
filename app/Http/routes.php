<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('master');
// });

Route::get('/jadwal', function () {
    return view ('jadwal.index');
});

Route::get('/cekjadwal', function () {
    return view ('cekjadwal.index');
});

Route::get('/keranjang', function () {
    return view ('keranjang.index');
});

Route::get('/cektiket', function () {
    return view ('cektiket.index');
});

Route::get('/tiket', function () {
    return view ('tiket.index');
});

Route::get('/beranda', function () {
    return view ('beranda.index');
});

Route::get('/admin', function () {
    return view ('admin.index');
});

Route::get('/register', function () {
    return view ('register.index');
});

Route::get('/masuk', function () {
    return view ('masuk.index');
});

Route::get('/', function () {
    return view ('index');
});




Route::get('pengguna','penggunaController@awal');
Route::get('pengguna/tambah','penggunaController@tambah');
Route::get('pengguna/lihat/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');

Route::get('pelanggan','pelangganController@awal');
Route::get('pelanggan/tambah','pelangganController@tambah');
Route::get('pelanggan/lihat/{pelanggan}','pelangganController@lihat');
Route::post('pelanggan/simpan','pelangganController@simpan');
Route::get('pelanggan/edit/{pelanggan}','pelangganController@edit');
Route::post('pelanggan/edit/{pelanggan}','pelangganController@update');
Route::get('pelanggan/hapus/{pelanggan}','pelangganController@hapus');

Route::get('petugas','petugasController@awal');
Route::get('petugas/tambah','petugasController@tambah');
Route::get('petugas/lihat/{petugas}','petugasController@lihat');
Route::post('petugas/simpan','petugasController@simpan');
Route::get('petugas/edit/{petugas}','petugasController@edit');
Route::post('petugas/edit/{petugas}','petugasController@update');
Route::get('petugas/hapus/{petugas}','petugasController@hapus');

Route::get('rute','ruteController@awal');
Route::get('rute/tambah','ruteController@tambah');
Route::get('rute/lihat/{rute}','ruteController@lihat');
Route::post('rute/simpan','ruteController@simpan');
Route::get('rute/edit/{rute}','ruteController@edit');
Route::post('rute/edit/{rute}','ruteController@update');
Route::get('rute/hapus/{rute}','ruteController@hapus');

Route::get('penerbangan','penerbanganController@awal');
Route::get('penerbangan/tambah','penerbanganController@tambah');
Route::get('penerbangan/lihat/{penerbangan}','penerbanganController@lihat');
Route::post('penerbangan/simpan','penerbanganController@simpan');
Route::get('penerbangan/edit/{penerbangan}','penerbanganController@edit');
Route::post('penerbangan/edit/{penerbangan}','penerbanganController@update');
Route::get('penerbangan/hapus/{penerbangan}','penerbanganController@hapus');

Route::get('info','infoController@awal');
Route::get('info/tambah','infoController@tambah');
Route::get('info/lihat/{info}','infoController@lihat');
Route::post('info/simpan','infoController@simpan');
Route::get('info/edit/{info}','infoController@edit');
Route::post('info/edit/{info}','infoController@update');
Route::get('info/hapus/{info}','infoController@hapus');