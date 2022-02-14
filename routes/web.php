<?php

use Illuminate\Support\Facades\Route;


Route::get('/' , 'GuestController@home')->name('home');

route::get('api/getVideogames','ApiController@getVideogames')->name('api.getVideogames');


// Delete
route::get('/delete/videogame/{id}','GuestController@deleteVideogame')->name('videogame.deleteVideogame');

