<?php

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('dom/', ['as' => 'dom.dashboard', 'uses' => 'Dom\HomeController@index']);

Route::get('dom/mood/up', 'Dom\MoodController@up');
Route::get('dom/mood/down', 'Dom\MoodController@down');



/*
  Route::bind('dom/punishment', function($value, $route) {
  dd($value);
  return Mistress\Punishment::where('id', $value)->first();
  });
 */

Route::model('rule', 'Mistress\Rule');
Route::resource('dom/rule', 'Dom\RuleController', ['except' => ['show', 'destroy']]);
Route::get('dom/rule/{rule}/delete', ['as' => 'dom.rule.destroy', 'uses' => 'Dom\RuleController@destroy']);

Route::model('punishment', 'Mistress\Punishment');
//Route::get('dom/punish', 'Dom\PunishmentController@punish');
//Route::post('dom/punish', 'Dom\PunishmentController@storePunishment');
//Route::get('dom/punish/{punishment}/complete', ['as' => 'dom.punish.complete', 'uses' => 'Dom\ConfessionController@complete']);
Route::resource('dom/punishment', 'Dom\PunishmentController', ['except' => ['destroy']]);
Route::get('dom/punishment/{punishment}/delete', ['as' => 'dom.punishment.destroy', 'uses' => 'Dom\PunishmentController@destroy']);

Route::model('assigned_punishment', 'Mistress\AssignedPunishment');
Route::resource('dom/assigned_punishment', 'Dom\AssignedPunishmentController', ['except' => ['destroy']]);
Route::get('dom/assigned_punishment/{assigned_punishment}/delete', ['as' => 'dom.assigned_punishment.destroy', 'uses' => 'Dom\AssignedPunishmentController@destroy']);
Route::get('dom/assigned_punishment/{assigned_punishment}/complete', ['as' => 'dom.assigned_punishment.complete', 'uses' => 'Dom\AssignedPunishmentController@complete']);

Route::model('confession', 'Mistress\Confession');
Route::resource('dom/confession', 'Dom\ConfessionController', ['except' => ['destroy']]);
Route::get('dom/confession/{confession}/delete', ['as' => 'dom.confession.destroy', 'uses' => 'Dom\ConfessionController@destroy']);
Route::get('dom/confession/{confession}/confirm', ['as' => 'dom.confession.confirm', 'uses' => 'Dom\ConfessionController@confirm']);
Route::get('dom/confession/{confession}/confirmd', ['as' => 'dom.confession.confirmd', 'uses' => 'Dom\ConfessionController@confirmDashboard']);

Route::model('timer', 'Mistress\Timer');
Route::get('dom/timer/{timer}/reset', ['as' => 'dom.timer.reset', 'uses' => 'Dom\TimerController@reset']);
Route::get('dom/timer/{timer}/resetd', ['as' => 'dom.timer.resetd', 'uses' => 'Dom\TimerController@resetDashboard']);
Route::resource('dom/timer', 'Dom\TimerController', ['except' => ['destroy']]);
Route::get('dom/timer/{timer}/delete', ['as' => 'dom.timer.destroy', 'uses' => 'Dom\TimerController@destroy']);

Route::model('count', 'Mistress\Count');
Route::get('dom/count/{count}/reset', ['as' => 'dom.count.reset', 'uses' => 'Dom\CountController@reset']);
Route::get('dom/count/{count}/increment', ['as' => 'dom.count.increment', 'uses' => 'Dom\CountController@increment']);
Route::get('dom/count/{count}/decrement', ['as' => 'dom.count.decrement', 'uses' => 'Dom\CountController@decrement']);
Route::get('dom/count/{count}/resetd', ['as' => 'dom.count.resetd', 'uses' => 'Dom\CountController@resetDashboard']);
Route::get('dom/count/{count}/incrementd', ['as' => 'dom.count.incrementd', 'uses' => 'Dom\CountController@incrementDashboard']);
Route::get('dom/count/{count}/decrementd', ['as' => 'dom.count.decrementd', 'uses' => 'Dom\CountController@decrementDashboard']);
Route::resource('dom/count', 'Dom\CountController', ['except' => ['destroy']]);
Route::get('dom/count/{count}/delete', ['as' => 'dom.count.destroy', 'uses' => 'Dom\CountController@destroy']);


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


Route::get('upload', function() {
    return View::make('upload.upload');
});
Route::post('upload', 'UploadController@upload');
