<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PagesController@home'); // 1

Route::get('/about', 'PagesController@about');

Route::get('users', function(){
  $users = User::all(); // 2
  $user = User::find(1); // 3
  return $user->username; // 4
});