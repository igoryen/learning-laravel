<?php

Route::get('/', function(){
  $users = User::find(1); // 4
  return $users;
});