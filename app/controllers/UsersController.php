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
  
  public function create(){
    return View::make('users.create');
  }
  
  public function store(){
    $validation = Validator::make(Input::all(), [
        'username' => 'required',
        'password' => 'required' 
    ]);
    if($validation->fails()){
      return Redirect::back()->withInput()->withErrors($validation->messages());
    }
    $user = new User;
    $user->username = Input::get('username');
    $user->password = Hash::make(Input::get('password'));
    $user->save();
    
    //return Redirect::to('/users');
    return Redirect::route('users.index');
  }
  
}
