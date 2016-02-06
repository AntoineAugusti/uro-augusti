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
    Route::get('consultations', [
        'as' => 'consultations', 'uses' => 'PagesController@consultations'
    ]);
    Route::get('equipe', [
        'as' => 'equipe', 'uses' => 'PagesController@equipe'
    ]);
    Route::get('hospitalisation', [
        'as' => 'hospitalisation', 'uses' => 'PagesController@hospitalisation'
    ]);
});
