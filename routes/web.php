<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.templates.sites');
});

Route::get('/drink/{drink}', 'Frontend\\DrinkController@index');
Route::get('/food/{food}', 'Frontend\\FoodController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');