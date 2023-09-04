<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
        <title>Super Gestão - fornecedor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="utf-8">
       <link rel="stylesheet" href="css/estilo_basico_app.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
             <a class="navbar-brand" href="{{ route('app.home') }}">
                <img src="/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.home') }}">Principal</a></li>
                    <li class="nav-item" ><a class="nav-link" href="{{ route('app.cliente') }}">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.fornecedor.fornecedor') }}">Fornecedores</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.produto.produto') }}">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.sair') }}">Sair</a></li>
                </ul>
            </div>
            </div>
        </nav>
        
        <div class="shadow text-bg-info p-3 fs-3"><center>FORNECEDORES</center></div></br>

        <div style="width: 90%; margin-left:auto;margin-right: auto; ">  
        <div >
        <img src="/img/arrow.png" width="20" height="20">
        <input type="button" class="btn" data-bs-toggle="button" value="Voltar" onClick="history.go(-1)"></div>
        <table class="table">
        <thead>
            <tr class="table-info">
                <th scope="col">Nome</th>
                <th scope="col">Site</th>
                <th scope="col">Uf</th>
                <th scope="col">Email</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fornecedores as $fornecedor)
            <tr>
                <td>{{$fornecedor->nome}}</td>
                <td>{{$fornecedor->site}}</td>
                <td>{{$fornecedor->uf}}</td>
                <td>{{$fornecedor->email}}</td>
                <td><a type="button" href="{{route('app.fornecedor.editar', $fornecedor->id)}}" class="btn btn-outline-success">Edit</a></td>
                <td><a type="button" href="{{route('app.fornecedor.excluir', $fornecedor->id)}}" class="btn btn-outline-primary">Excluir</a></td>
            </tr>
        @endforeach
        </tbody>
        </table>
        </div>
  
    </body>
</html>
