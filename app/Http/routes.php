<?php

Route::group(['middleware' => []], function () {
    Route::get('/', [
        'as' => 'home', 'uses' => 'PagesController@home',
    ]);
    Route::get('contact', [
        'as' => 'contact', 'uses' => 'PagesController@contact',
    ]);
    Route::get('juridique', [
        'as' => 'juridique', 'uses' => 'PagesController@juridique',
    ]);
    Route::get('sites-operatoires', [
        'as' => 'sites-operatoires', 'uses' => 'PagesController@sitesOperatoires',
    ]);
    Route::get('consultations', [
        'as' => 'consultations', 'uses' => 'PagesController@consultations',
    ]);
    Route::get('equipe', [
        'as' => 'equipe', 'uses' => 'PagesController@equipe',
    ]);
    Route::get('hospitalisation', [
        'as' => 'hospitalisation', 'uses' => 'PagesController@hospitalisation',
    ]);
    Route::get('liens-utiles', [
        'as' => 'liens-utiles', 'uses' => 'PagesController@liensUtiles',
    ]);
    Route::get('pathologies', [
        'as' => 'pathologies', 'uses' => 'PagesController@pathologies',
    ]);
    Route::get('covid-19', [
        'as' => 'covid-19', 'uses' => 'PagesController@covid',
    ]);
});
