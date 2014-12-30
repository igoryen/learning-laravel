@extends('layouts.default')

@section('content')

<h1>All Users</h1>
    @if($users->count())
    
      @foreach($userss as $user)
        <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
      @endforeach
    
    @else
    
      <p>Unfortunately, there are no users</p>
  
    @endif
    
@stop

@section('footer')
  <h3>This is my footer</h3>
@stop