<?php

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('dom/', 'Dom\HomeController@index');

Route::get('dom/mood/up', 'Dom\MoodController@up');
Route::get('dom/mood/down', 'Dom\MoodController@down');

Route::get('dom/punish', 'Dom\PunishmentController@punish');
Route::post('dom/punish', 'Dom\PunishmentController@storePunishment');

/*
Route::bind('dom/punishment', function($value, $route) {
    dd($value);
    return Mistress\Punishment::where('id', $value)->first();
});
*/
Route::model('punishment', 'Mistress\Punishment');
Route::resource('dom/punishment', 'Dom\PunishmentController');





Route::get('sub/', 'Sub\HomeController@index');

Route::get('task/{task}/complete', 'TaskController@complete');
Route::post('task/{task}/complete', 'TaskController@updateComplete');

Route::get('task/{task}/verify', 'TaskController@verify');
Route::post('task/{task}/verify', 'TaskController@updateVerify');

Route::resource('task', 'TaskController');

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

