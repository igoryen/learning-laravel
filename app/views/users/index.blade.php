<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
    <h1>All Users</h1>
    @foreach($users as $user)
      <li>{{ $user->username }}</li>
    @endforeach
    
     
  </body>
</html>