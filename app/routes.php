<?php

Route::get('/', function(){
  $users = User::where('username', '!=', 'igoryen')->get(); // 6
  return $users;
});