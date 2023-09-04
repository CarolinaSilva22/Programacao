<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>siteAdd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body><main class="container">
  <center> <div class="fs-2 mb-3">
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"></path>
</svg>  Adicionar</div></center>
  <br>
  <form method="post" action="{{route('user.store')}}">
    @csrf  
    
  </div>
    <div class="mb-3">
    <label for="name" class="form-label">Nome:</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="emailHelp" value="{{old('name')}}">
  
    @error('name') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
  
    <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{old('email')}}">
    
    @error('email') <div class="invalid-feedback">{{$message}}</div>@enderror</div>

    <div class="mb-3">
    <label for="street" class="form-label">Rua:</label>
    <input type="text" class="form-control @error('street') is-invalid @enderror" name="street" id="street" aria-describedby="emailHelp" value="{{old('street')}}">

    @error('street') <div class="invalid-feedback">{{$message}}</div>@enderror</div>

    <div class="mb-3">
    <label for="number" class="form-label">Numero:</label>
    <input type="text" class="form-control @error('number') is-invalid @enderror" name="number" id="number" aria-describedby="emailHelp" value="{{old('number')}}">
  
    @error('number') <div class="invalid-feedback">{{$message}}</div>@enderror</div>

  <button type="submit" class="btn btn-primary">Salvar</button>
  <input type="button" class="btn btn-secondary " value="Voltar" onClick="history.go(-1)">
</form>
  </body>
</html>