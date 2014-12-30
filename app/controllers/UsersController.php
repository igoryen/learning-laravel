<?php

class UsersController extends \BaseController {
  public function index(){ // 16
    $users = User::all();
    return View::make('users.index', ['users' => $users]); // 13
  }
  
  public function show($username){ // 16
    $user = User::whereUsername($username)->first(); // 14
    return View::make('users.show', ['user' => $user]);
  }
}
