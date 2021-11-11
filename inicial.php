<!doctype html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8"> <!-- tag para o navegador identificar vários caracteres diferentes -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">  
<link rel="stylesheet" href="https://getbootstrap.com.br/docs/3.3/components/"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
  crossorigin="anonymous" />
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
crossorigin="anonymous"></script>
<title>HOME</title>
    </head>
    <body>
    <?php
    include "reutilizaveis/cabecalho.html";
    if (isset($_GET['r'])) {
        echo ("<script>alert('" . $_GET['r'] . "');</script>");
    }
    ?>

    <script>
        document.getElementById("inicio").classList.add("active")
    </script>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="d-block w-100" src="img/banner01.png"width="1920" height="500" alt="Primeiro slide">
                  <div >
                  <div class="carousel-caption d-none d-md-block">
                    <h1><b>GANCHOS E CATRACAS</b></h1><br>
                    <a href="ganchos.php">
                    <button type="button" class="btn btn-danger">Ver mais</button>
                  </a>               
                  </div>
                </div>
              </div>         
              <div class="carousel-item">
                <img class="d-block w-100" src="img/banner02.png" width="1920" height="500" alt="Segundo slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>LONA DE CAMINHÃO</b></h1><br>
                  <a href="lonasCaminhao.php">
                    <button type="button" class="btn btn-danger">Ver mais</button>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/banner03.png" width="1920" height="500" alt="Terceiro slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1><b>CAPAS PARA PISCINAS</b></h1><br>
                  <a href="conjuntoCapas.php">
                    <button type="button" class="btn btn-danger">Ver mais</button>
                  </a>
                </div>
              </div>
            </div>
            </div>
          
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          
            <div class="texto text-center p-4">
            <h3><font color="#2C2C2C"><b>Nossas Vantagens</b></font></h3>
          </div>
          <div class="row justify-content-center text-center">
          <div class="col-md-2">
          <h1 class="bi bi-clock-fill"></h1>
          <h5><b>Atendimento Rápido</b></h5>
          </div>
          <div class="col-md-2">
          <h1 class="bi bi-wrench"></h1>
          <h5><b>Serviço profissional</b></h5>
  </div>
  <div class="col-md-2">
          <h1 class="bi bi-check-circle"></h1>
          <h5><b>Garantia de qualidade</b></h5>
  </div>
  <div class="col-md-2">
          <h1 class="bi bi-shop"></h1>
          <h5><b>Grande estoque</h5>
  </div>
  </div></br></br>
<div class="row no-gutters text-justify">
                <div class="col-sm mx-auto" id="galeria-cover" style="background-image: url(img/DSCN1218.jpg);"></div>
                <div class="col-sm mx-auto" id="galeria-cover" style="background-color: #E9E9E9;">
                <div class="container"><font color="#333333"><h3><b>Sobre Nós</b></h3></br><h6>A nossa empresa nasceu com a proposta de oferecer produtos de altíssima qualidade, com inovação e preço combinante ao mercado nacional. Possuímos uma equipe especializada e treinada capaz de gerar soluções compatíveis ao pedido do cliente, entregas rápidas e o atendimento que você confia!
  </br></br>
Fundada em abril de 2005, a Lonas Borim vem ampliando seu estoque e sua segmentação de produtos, desde arruelas para toldos, lonas vinil, capas de chuva, cordas, alpargatas, telas industriais e outros diversos produtos.
  </br></br>
Estamos preparados para atender sua empresa, solicite o seu orçamento!</h6></font></div></div>
              </div>
  <div class="texto text-center p-4">
            <h3><font color="#2C2C2C"><b>Produtos em destaque</b></font></h3></br>
            <div class="row justify-content-center text-center">
            <div class="card mx-1"  style="width: 18rem;">
            <a href="acessoriosToldo.php">
  <img class="card-img-top" src="img/acessórios.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Acessórios de Toldo</b><h5></font></p>
  </div>
</div>
  

<div class="card mx-1" style="width: 18rem;">
<a href="catracasFixa.php">
  <img class="card-img-top" src="img/catracas.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Catraca fixa</b><h5></font></p>
  </div>
</div>


<div class="card mx-1" style="width: 18rem;">
<a href="cintasElevacao.php">
  <img class="card-img-top" src="img/cinta.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Cintas de Elevação</b><h5></font></p>
  </div>
</div>
  </div>
  <div class="row justify-content-center text-center">
            <div class="card mx-1"  style="width: 18rem;">
            <a href="conjuntoCapas.php">
  <img class="card-img-top" src="img/conjunto.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Conjunto e Capas</b><h5></font></p>
  </div>
</div>
  

<div class="card mx-1" style="width: 18rem;">
<a href="cordasElasticos.php">
  <img class="card-img-top" src="img/cordas+e+elasticos.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Cordas e Elásticos</b><h5></font></p>
  </div>
</div>


<div class="card mx-1" style="width: 18rem;">
<a href="diversos.php">
  <img class="card-img-top" src="img/diversos.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Diversos</b><h5></font></p>
  </div>
</div>
  </div>
  </br> 
            <a href="produtos.php">
                           <button style="float:center;" class="btn btn-danger">Ver mais</button>
                           </a>
          </div>
        
         
  <div class="jumbotron5 text-center align-item-center d-flex flex-column justify-content-center pt-3">  
  <div class="row justify-content-center">
  <div class="col-sm-4 text-center">
  <div class="card">
  <div class="texto text-center p-4">
            <h2><font color="#1C2A78"><b>Nossa localização</b></font></h2>
            <h6><font color="#1C2A78"><b>Av. Colombo, 6760 - Maringá - PR</b></font></h6>
          </div>
          <div class="text-center">
          <iframe
           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.2673368366627!2d-51.946948863853386!3d-23.414708123109857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecd6d0a5815ef3%3A0xdabefb6918c91eaa!2sLonas%20Borim!5e0!3m2!1spt-BR!2sbr!4v1620752898842!5m2!1spt-BR!2sbr"
             width="410" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
</div>
  </div>
  </div>
  <div class="col-sm-4 text-center">
  <div class="card">
  <div class="texto text-center p-4">
            <h2><font color="#1C2A78"><b>Envie Sua Mensagem</b></font></h2>
          </div>
          <form name="formulario" class="needs-validation" method="post" action="enviaEmail.php" enctype="multipart/form-data">
<div class="container">
                            <div class="form-group"></br>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Telefone" name="fone" id="fone" required>
                            </div>
                            <div class="form-group" id="caixaEmail">
                                <input type="mail" class="form-control" placeholder="E-mail" name="email" id="email" required onfocusout="validaEmail()">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Mensagem" name="corpo" id="corpo" rows="2" required></textarea>
                            </div>
                            <button type="submit" id="btn" style="float:center;" class="btn btn-danger">ENVIAR</button>
                            <input type="hidden" name="retorno" id="retorno" value="inicial.php">
                        </div></br>
                        </form>
  </div>
  </div>
  </div>
            </div>
            <?php include "reutilizaveis/rodape.html"?>
</body>
</html>