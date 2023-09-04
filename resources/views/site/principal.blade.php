<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Principal</title>
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

        <div class="conteudo-destaque">
        
            <div class="esquerda">
                <div class="informacoes">
                    
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial ideal para sua empresa.<p>
                    <div class="chamada">
                        <img src="/img/check.png">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                    <img src="/img/check.png">
                        <span class="texto-branco">Sua empresa na nuvem</span>
                    </div>
                </div>

            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    <form action="{{ route('site.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                        <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="borda-branca" class="form-control @error('nome') is-invalid @enderror">
                        @error('nome') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                        <div class="mb-3">
                        <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="borda-branca" class="form-control @error('telefone') is-invalid @enderror">
                        @error('telefone') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                      
                        <div class="mb-3">
                        <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="borda-branca" class="form-control @error('email') is-invalid @enderror">
                        @error('email') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                      
                        <div class="mb-3">
                        <select name="motivo_contato" class="borda-branca" class="form-control @error('email') is-invalid @enderror">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="1">Dúvida</option>
                            <option value="2">Elogio</option>
                            <option value="3">Reclamação</option>
                        </select>
                        @error('motivo_contato') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                       
                        <div class="mb-3">
                        <input name="mensagem"  value="{{old('mensagem')}}"type="text" placeholder="Preencha aqui sua mensagem" class="borda-branca" class="form-control @error('mensagem') is-invalid @enderror">
                        @error('mensagem') <div class="invalid-feedback">{{$message}}</div>@enderror</div>
                        <br>
                        <button type="submit" class="borda-branca">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>