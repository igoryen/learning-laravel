<?php 
class PagesController extends BaseController{
  public function home(){
    $name = 'dear Igor';
    return View::make('hello2')->with('name', $name);
  }
}