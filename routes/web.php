<?php

use Illuminate\Support\Facades\Route;


Route::get('/' , 'GuestController@home')->name('home');

route::get('api/getVideogames','ApiController@getVideogames')->name('api.getVideogames');


// Delete
route::get('/delete/videogame/{id}','GuestController@deleteVideogame')->name('videogame.deleteVideogame');

// auth

Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');