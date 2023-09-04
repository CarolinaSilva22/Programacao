<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
    <body main class="container">
    <center><h1>login</h1></center>
    <br>
  <form method="post" action="{{route('user.update', $user->id)}}">
    @csrf
    @method('put')
  <div class="mb-3">
    <label for="name" class="form-label">Nome:</label>
    <input type="text" value="{{$user->name}}" class="form-control" name="name" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email"  value="{{$user->email}}" class="form-control" name="email" id="email">
  </div>
</form>
    <a type="button" href="{{route('user.index')}}" class="btn btn-outline-success">Entrar
 
</body>   
  
</html>
