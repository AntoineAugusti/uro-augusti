<?php

Route::group(['middleware' => []], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('contact', [
        'as' => 'contact', 'uses' => 'PagesController@contact'
    ]);
    Route::get('juridique', [
        'as' => 'juridique', 'uses' => 'PagesController@juridique'
    ]);
    Route::get('sites-operatoires', [
        'as' => 'sites-operatoires', 'uses' => 'PagesController@sitesOperatoires'
    ]);
});
