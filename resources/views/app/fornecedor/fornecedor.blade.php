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
            
        <div class="vstack gap-2 col-md-11 mx-auto">
           <p> <a class="link-info link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
           href="{{ route('app.fornecedor.adicionar') }}">Novo</a></p>
        </div>
       
        <div style="width: 40%; margin-left:auto;margin-right: auto; ">
            <form method="post" action="{{route('app.fornecedor.listar')}}">
                @csrf
            <div class="mb-3">
               <label class="form-label">Nome:</label>
                <input type="text" name="nome" placeholder="nome" class="form-control">
            </div>
            <div class="mb-3">
               <label class="form-label">Site:</label>
                <input type="text" name="site" placeholder="site" class="form-control">
            </div>
            <div class="mb-3">
               <label class="form-label">UF:</label>
                <input type="text" name="uf" placeholder="uf" class="form-control">
            </div>
            <div class="mb-3">
               <label class="form-label">Email:</label>
                <input type="email" name="email" placeholder="email" class="form-control">
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-outline-success">Pesquisa</button>
            </div>
        </div>
  
    </body>
</html>
