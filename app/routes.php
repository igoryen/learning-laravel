<?php

Route::get('users', 'UsersController@index');

Route::get('users/{username}', 
        'UsersController@show');

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

/*
Route::get('users', function(){
  $users = User::all();
  // The 3 ways to return
  //return View::make('users/index')->with('users', $users); // 12
  //return View::make('users/index')->withUsers($users);
  //return View::make('users/index', ['users' => $users]);
  return View::make('users.index', ['users' => $users]); // 13
});
*/

/*
Route::get('users/{username}', function($username){
  $user = User::whereUsername($username)->first(); // 14
  return View::make('users.show', ['user' => $user]);
});
*/