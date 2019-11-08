<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('kolam')->group(function(){
    Route::get('/', 'KolamController@index')->name('kolam');
    Route::get('/add', 'KolamController@create')->name('tambah.kolam');
    Route::post('/add', 'KolamController@store')->name('tambah.kolam.post');
    Route::delete('/{id}/delete', 'KolamController@destroy')->name('kolam.delete');
    Route::get('/cetak_kecamatan', 'KolamController@cetak_kecamatan')->name('kolam.pdf.kecamatan');
    Route::get('/cetak_bulan', 'KolamController@cetak_bulan')->name('kolam.pdf.bulan');
});

Route::prefix('penyuluh')->group(function(){
    Route::get('/', 'PenyuluhController@index')->name('penyuluh');
    Route::post('/', 'PenyuluhController@store')->name('penyuluh.post');
    Route::delete('/{id}/delete', 'PenyuluhController@destroy')->name('penyuluh.delete');
});

Route::prefix('lahan')->group(function(){
    Route::get('/', 'LuasLahanController@index')->name('lahan');
    Route::get('/add', 'LuasLahanController@create')->name('tambah.lahan');
    Route::post('/add', 'LuasLahanController@store')->name('tambah.lahan.post');
    Route::delete('/{id}/delete', 'LuasLahanController@destroy')->name('lahan.delete');
});

Route::prefix('tambak')->group(function(){
    Route::get('/', 'TambakController@index')->name('tambak');
    Route::get('/add', 'TambakController@create')->name('tambah.tambak');
    Route::post('/add', 'TambakController@store')->name('tambah.tambak.post');
    Route::delete('/{id}/delete', 'TambakController@destroy')->name('tambak.delete');
    Route::get('/cetak_kecamatan', 'TambakController@cetak_kecamatan')->name('tambak.pdf.kecamatan');
    Route::get('/cetak_bulan', 'TambakController@cetak_bulan')->name('tambak.pdf.bulan');
});

Route::prefix('pengolahan')->group(function(){
    Route::get('/', 'ProduksiPengolahanController@index')->name('pengolahan');
    Route::get('/add', 'ProduksiPengolahanController@create')->name('tambah.pengolahan');
    Route::post('/add', 'ProduksiPengolahanController@store')->name('tambah.pengolahan.post');
    Route::delete('/{id}/delete', 'ProduksiPengolahanController@destroy')->name('pengolahan.delete');
    Route::get('/cetak_kecamatan', 'ProduksiPengolahanController@cetak_kecamatan')->name('pengolahan.pdf.kecamatan');
    Route::get('/cetak_bulan', 'ProduksiPengolahanController@cetak_bulan')->name('pengolahan.pdf.bulan');
});

Route::prefix('benih')->group(function(){
    Route::get('/', 'BenihController@index')->name('benih');
    Route::get('/add', 'BenihController@create')->name('tambah.benih');
    Route::post('/add', 'BenihController@store')->name('tambah.benih.post');
    Route::delete('/{id}/delete', 'BenihController@destroy')->name('benih.delete');
    Route::get('/cetak_kecamatan', 'BenihController@cetak_kecamatan')->name('benih.pdf.kecamatan');
    Route::get('/cetak_bulan', 'BenihController@cetak_bulan')->name('benih.pdf.bulan');
});

Route::prefix('upr')->group(function(){
    Route::get('/', 'UprController@index')->name('upr');
    Route::get('/add', 'UprController@create')->name('tambah.upr');
    Route::post('/add', 'UprController@store')->name('tambah.upr.post');
    Route::delete('/{id}/delete', 'UprController@destroy')->name('upr.delete');

});

Route::prefix('pendataan')->group(function(){
    Route::get('/', 'PendataanController@index')->name('pendataan');
    Route::get('/add', 'PendataanController@create')->name('tambah.pendataan');
});

Route::prefix('olahan')->group(function(){
    Route::get('/', 'JenisOlahanController@index')->name('olahan');
    Route::post('/', 'JenisOlahanController@store')->name('tambah.olahan.post');
    Route::delete('/{id}/delete', 'JenisOlahanController@destroy')->name('olahan.delete');
});
