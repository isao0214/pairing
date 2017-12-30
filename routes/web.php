<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'parties'], function()
{
    Route::get('/create', 'PartiesController@create');
    Route::get('/{random_id}', 'PartiesController@show');
    Route::get('/{random_id}/edit', 'PartiesController@edit');
    Route::patch('/{random_id}', 'PartiesController@update');
    Route::delete('/{random_id}', 'PartiesController@destroy');
});
