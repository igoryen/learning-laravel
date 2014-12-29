<?php

Route::get('/', function(){
  $users = User::all(); // 2
  return $users;
});