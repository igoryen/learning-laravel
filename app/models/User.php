<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
  public $timestamps = false; // 9
  protected $fillable = ['username', 'password']; // 10
  public static $val_rules = [
      'username' => 'required',
      'password' => 'required'
  ];
  public static $err_messages;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
  
  public static function isValid($data){
    $validation = Validator::make($data, static::$val_rules);
    if($validation->passes()){
      return true;
    }
    static::$err_messages = $validation->messages();
    return false;
  }
}
