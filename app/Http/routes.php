<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('contact', [
        'as' => 'contact', 'uses' => 'PagesController@contact'
    ]);
    Route::get('juridique', [
        'as' => 'juridique', 'uses' => 'PagesController@juridique'
    ]);
});
