<?php

Route::get('/', function(){
  $user = new User();
  $user->username = 'Jenica';
  $user->password = Hash::make('jenica'); // 7
  $user->save(); // 8
  
  return User::all();
});