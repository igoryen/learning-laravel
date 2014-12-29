<?php

Route::get('/', function(){
  $users = DB::table('users')->get(); // 2
  return $users;
});