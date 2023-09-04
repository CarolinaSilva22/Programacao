<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Sobre Nós</title>
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
                <h1>Olá, eu sou o Super Gestão</h1>
            </div>

            <div class="informacao-pagina">
                <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
                <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
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
    </body>
</html>