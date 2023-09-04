<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
        <title>Super Gestão - Contato</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="utf-8">
       <link rel="stylesheet" href="css/estilo_basico.css">
    </head>

    <body>
        <div class="topo">

            <div class="menu">
                <ul>
                    <li><a href="{{ route('site.principal') }}">Principal</a></li>
                    <li><a href="{{ route('site.sobre') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    <form action="{{ route('site.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                        <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" aria-describedby="emailHelp" class="form-control @error('nome') is-invalid @enderror">
                        @error('nome') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                     
                        <div class="mb-3">
                        <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="form-control @error('telefone') is-invalid @enderror">
                        @error('telefone') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                      
                        <div class="mb-3">
                        <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror">
                        @error('email') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                      
                        <div class="mb-3">
                        <select name="motivo_contato" class="form-control @error('email') is-invalid @enderror">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="1">Dúvida</option>
                            <option value="2">Elogio</option>
                            <option value="3">Reclamação</option>
                        </select>
                        @error('motivo_contato') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                       
                        <div class="mb-3">
                        <input name="mensagem"  value="{{old('mensagem')}}"type="text" placeholder="Preencha aqui sua mensagem" class="form-control @error('mensagem') is-invalid @enderror">
                        @error('mensagem') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                      
                        <br>
                        <button type="submit" class="borda-preta">ENVIAR</button>
                    </form>
                </div>
            </div>  
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.png" width="40" height="40">
                <img src="img/linkedin.png" width="40" height="40">
                <img src="img/youtube.png" width="40" height="40">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15004.260417175137!2d-43.93293909999999!3d-19.92166115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699c273363c07%3A0x4c7d3d103d04be63!2sPal%C3%A1cio%20das%20Artes!5e0!3m2!1spt-BR!2sbr!4v1690562106503!5m2!1spt-BR!2sbr" width="140" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
    </body>
</html>