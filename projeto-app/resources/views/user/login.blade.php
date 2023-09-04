<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="utf-8">
    </head>

    <body><main class="container">
    <center><h1>Login</h1></center>
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
  <div class="mb-3">
  <label for="street" class="form-label">Rua:</label>
    <input type="text" value="{{$user->address->street}}" class="form-control" name="street" id="street">
  </div>
  <div class="mb-3">
    <label for="number" class="form-label">Numero:</label>
    <input type="text"  value="{{$user->address->number}}" class="form-control" name="number" id="number">
  </div>
 
  <button type="submit" class="btn btn-primary">Atualizar</button>
 
  <input type="button" class="btn btn-secondary " value="Voltar" onClick="history.go(-1)">
</form>
  </body>
</html>