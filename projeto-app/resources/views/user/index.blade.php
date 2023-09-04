<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body><main class="container">
    <center><h1>index</h1></center>
    <a href="{{route('user.create')}}" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
      Novos Usuarios
</a>
    <table class="table table-dark table-striped">
  <thead>
  <tr class="table-success" align="center">
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Criação</th>
      <th scope="col">Ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>

    @foreach($users as $user)
    <tr class="table table-dark" align="center">
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td><a type="button" href="{{route('user.show', $user->id)}}" class="btn btn-outline-success">Ver</td>
      <td><a type="button" href="{{route('user.edit', $user->id)}}" class="btn btn-outline-primary">Edit</td>
      <td>
        <form action="{{route('user.destroy', $user->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger">Delete</button></td>
        </form>
    </tr>
    @endforeach

  </tbody>
    </table>
  </body>
</html>