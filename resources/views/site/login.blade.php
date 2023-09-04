<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
        <title>Super Gestão - Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="utf-8">
       <link rel="stylesheet" href="css/estilo_basico.css">
    </head>

    <body>
    <div class="topo">
      <div class="menu">
      </div>
    </div>

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Login</h1>
            </div>

            <div class="informacao-pagina">
                <form action="{{ route('site.login')}}" method="post">
                    @csrf
                    <div class="vstack gap-2 col-md-5 mx-auto">
                        <div class="mb-3">
                        <input name="usuario" value="{{old('usuario')}}" type="text" placeholder="usuario" class="form-control @error('usuario') is-invalid @enderror">
                        @error('usuario') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                     
                        <div class="mb-3">
                        <input name="senha" type="password" placeholder="senha" class="form-control @error('senha') is-invalid @enderror">
                        @error('senha') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
    
                        <button type="submit" class="borda-preta">Acessar</button>
                    </div>
                </form>
                {{ isset($erro) && $erro != '' ? $erro : ''}}
            </div>
        </div>

    </body>
</html>