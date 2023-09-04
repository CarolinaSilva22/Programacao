<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>siteEdit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body><main class="container">
 <center> <div class="fs-2 mb-3">
 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>  Editar
  </div></center>
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