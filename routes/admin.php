<?php

Route::get('/', 'HomeController@index')->name('dashboard');


//Route Kuda
Route::get('/kuda', 'KudaController@index')->name('kuda.index');
Route::get('/kuda/create', 'KudaController@create')->name('kuda.create');
Route::post('/kuda', 'KudaController@store')->name('kuda.store');
Route::get('/kuda/{kuda}/edit', 'KudaController@edit')->name('kuda.edit');
Route::put('/kuda/{kuda}', 'KudaController@update')->name('kuda.update');
Route::delete('/kuda/{kuda}', 'KudaController@destroy')->name('kuda.destroy');

//Route Pelatih
Route::get('/pelatih', 'PelatihController@index')->name('pelatih.index');
Route::get('/pelatih/create', 'PelatihController@create')->name('pelatih.create');
Route::post('/pelatih', 'PelatihController@store')->name('pelatih.store');
Route::get('/pelatih/{pelatih}/edit', 'PelatihController@edit')->name('pelatih.edit');
Route::put('/pelatih/{pelatih}/update', 'PelatihController@update')->name('pelatih.update');
Route::delete('/pelatih/{pelatih}', 'PelatihController@destroy')->name('pelatih.destroy');

// ROute Peserta
Route::get('/peserta', 'PesertaController@index')->name('peserta.index');
Route::get('/peserta/create', 'PesertaController@create')->name('peserta.create');
Route::post('/peserta', 'PesertaController@store')->name('peserta.store');
Route::get('/peserta/{peserta}/edit', 'PesertaController@edit')->name('peserta.edit');
Route::put('/peserta/{peserta}/update', 'PesertaController@update')->name('peserta.update');
Route::delete('/peserta/{peserta}', 'PesertaController@destroy')->name('peserta.destroy');

Route::get('/peserta/{peserta}/detail', 'PesertaController@detail')->name('peserta.detail');
// Route::get('/peserta/{peserta}/edit', 'PesertaController@edit')->name('Peserta.edit');


// Route Perdatang
Route::get('/pesertaperdatang', 'PesertaperdatangController@index')->name('pesertaperdatang.index');
Route::get('/pesertaperdatang/create', 'PesertaperdatangController@create')->name('pesertaperdatang.create');
Route::post('/pesertaperdatang', 'PesertaperdatangController@store')->name('pesertaperdatang.store');
Route::get('/pesertaperdatang/{pesertaperdatang}/edit', 'PesertaperdatangController@edit')->name('pesertaperdatang.edit');
Route::put('/pesertaperdatang/{pesertaperdatang}/update', 'PesertaperdatangController@update')->name('pesertaperdatang.update');
Route::delete('/pesertaperdatang/{pesertaperdatang}', 'PesertaperdatangController@destroy')->name('pesertaperdatang.destroy');

Route::get('/pesertaperdatang/{pesertaperdatang}/detail', 'PesertaperdatangController@detail')->name('pesertaperdatang.detail');



Route::get('/visitor', 'VisitorController@index')->name('visitor.index');
// Json Visitor

Route::get('/visitor/data', 'DataController@visitors')->name('visitor.data');


Route::get('/drink', 'DrinkController@index')->name('drink.index');
Route::get('/drink/create', 'DrinkController@create')->name('drink.create');
Route::post('/drink', 'DrinkController@store')->name('drink.store');
Route::get('/drink/{drink}/edit', 'DrinkController@edit')->name('drink.edit');
Route::put('/drink/{drink}', 'DrinkController@update')->name('drink.update');
Route::delete('/drink/{drink}', 'DrinkController@destroy')->name('drink.destroy');
//jSon Drink
Route::get('/drink/data', 'DataController@drinks')->name('drink.data');


Route::get('/food', 'FoodController@index')->name('food.index');
Route::get('/food/create', 'FoodController@create')->name('food.create');
Route::post('/food', 'FoodController@store')->name('food.store');
Route::get('/food/{food}/edit', 'FoodController@edit')->name('food.edit');
Route::put('/food/{food}', 'FoodController@update')->name('food.update');
Route::delete('/food/{food}', 'FoodController@destroy')->name('food.destroy');

// jSon Food
Route::get('/food/data', 'DataController@foods')->name('food.data');