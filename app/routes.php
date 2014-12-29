<?php

Route::get('/', function(){
  $users = DB::table('users')->get(); // 2
  $user = DB::table('users')->find(1); // 3
  dd($user); // 5
});