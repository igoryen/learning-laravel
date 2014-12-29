<?php

Route::get('/', function(){
  $users = DB::table('users')->where('username', '!=', 'igoryen')->get(); // 6
  return $users;
});