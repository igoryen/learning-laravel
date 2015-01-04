<?php

class UsersController extends \BaseController {
  
  protected $user;

  public function __construct(User $user) { // 17
    $this->user = $user;
  }
  
  public function index(){ // 16
    $users = $this->user->all();
    return View::make('users.index', ['users' => $users]); // 13
  }
  
  public function show($username){ // 16
    $user = $this->user->whereUsername($username)->first(); // 14
    return View::make('users.show', ['user' => $user]);
  }
  
  public function create(){
    return View::make('users.create');
  }
  
  public function store(){
    if(! $this->user->isValid($input = Input::all())){
      return Redirect::back()->withInput()->withErrors($this->user->err_messages);
    }
    $validation = Validator::make(Input::all(), User::$val_rules);
    if($validation->fails()){
      return Redirect::back()->withInput()->withErrors($validation->messages());
    }
    
    $this->user->create($input);
    
    //return Redirect::to('/users');
    return Redirect::route('users.index');
  }
  
}
