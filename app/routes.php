<?php

Route::get('/', function(){
  /*
  $user = new User();
  $user->username = 'Jenica';
  $user->password = Hash::make('jenica'); // 7
  $user->save(); // 8
  */
  
  /*
  User::create([
      'username' => 'Nadya',
      'password' => Hash::make('nadya')
  ]);
  */
  
  /*
  $user = User::find(5);
  $user->username = 'Nadia';
  $user->save(); // 8
  */
  
  /*
  $user = User::find(5);
  $user -> delete();
  */
  
  return User::orderBy('username', 'asc')->get(); // 11
});