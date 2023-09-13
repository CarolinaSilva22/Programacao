<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
        <title>Super Gestão - Produtos</title>
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
                    <li class="nav-item" ><a class="nav-link" href="{{ route('app.cliente.cliente') }}">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.fornecedor.fornecedor') }}">Fornecedores</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.produto.produto') }}">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('app.sair') }}">Sair</a></li>
                </ul>
            </div>
            </div>
        </nav>
        
        <div class="shadow text-bg-info p-3 fs-3"><center>PRODUTOS-editar</center></div></br>
       
        <div class="vstack gap-2 col-md-11 mx-auto">
           <p> <a class="link-info link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
           href="{{ route('app.produto.produto') }}">Voltar</a></p>
        </div>

        <div style="width: 40%; margin-left:auto;margin-right: auto; ">
            <form method="post" action="{{route('app.produto.update', $produto->id)}}">
            @csrf
            @method('put')   
            <div class="mb-3">
                <input name="nome" value="{{$produto->nome ?? old('nome')}}" type="text"  placeholder="nome:" class="form-control @error('nome') is-invalid @enderror">
                @error('nome') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
            <div class="mb-3">
                <input name="preco" value="{{$produto->preco ?? old('preco')}}" type="text"  placeholder="preço:" class="form-control @error('preco') is-invalid @enderror">
                @error('preco') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
            <div class="mb-3">
                <input name="estoque_maximo" value="{{$produto->estoque_maximo ?? old('estoque_maximo')}}" type="text"  placeholder="estoque maximo:" class="form-control @error('estoque_maximo') is-invalid @enderror">
                @error('estoque_maximo') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
            <div class="mb-3">
                <input name="estoque_minimo" value="{{$produto->estoque_minimo ?? old('estoque_minimo')}}" type="text"  placeholder="estoque minimo:" class="form-control @error('estoque_minimo') is-invalid @enderror">
                @error('estoque_minimo') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
            <div class="mb-3">
                <input name="descricao" value="{{$produto->descricao ?? old('descricao')}}" type="text"  placeholder="descrição:" class="form-control @error('descricao') is-invalid @enderror">
                @error('descricao') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-outline-success">Editar</button>
            </div>
        </div>
  
    </body>
</html>
