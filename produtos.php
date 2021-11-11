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
<title>Produtos</title>
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
    <div class="jumbotron4 text-center align-item-center d-flex flex-column justify-content-center pt-3">  
                  <div class="texto text-center p-4"> 
            <div></br>
             <h2><b>Qualidade que você pode confiar!</b></h2>
              </div>
                </div>
            </div>
            <div class="texto text-center p-4">
            <h3><font color="#2C2C2C"><b>Nossos produtos</b></font></h3>
          </div>
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
  <div class="row justify-content-center text-center">
            <div class="card mx-1"  style="width: 18rem;">
            <a href="ganchos.php">
  <img class="card-img-top" src="img/ganchos.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Ganchos</b><h5></font></p>
  </div>
</div>
<div class="card mx-1" style="width: 18rem;">
<a href="kitCatraca.php">
  <img class="card-img-top" src="img/kit+catraca.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Kit Catraca</b><h5></font></p>
  </div>
</div>
<div class="card mx-1" style="width: 18rem;">
<a href="kitMoto.php">
  <img class="card-img-top" src="img/kit+moto.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Kit Moto</b><h5></font></p>
  </div>
</div>
  </div>
  <div class="row justify-content-center text-center">
            <div class="card mx-1"  style="width: 18rem;">
            <a href="lonaLeveLonaPreta.php">
  <img class="card-img-top" src="img/Lona+Preta+-+REF+2678-398252bc.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Lona leve e Lona preta</b><h5></font></p>
  </div>
</div>
<div class="card mx-1" style="width: 18rem;">
<a href="lonasCaminhao.php">
  <img class="card-img-top" src="img/lona+caminhão.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Lonas para Caminhão</b><h5></font></p>
  </div>
</div>
<div class="card mx-1" style="width: 18rem;">
<a href="lonasToldo.php">
  <img class="card-img-top" src="img/lona+toldo.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Lonas para Toldo</b><h5></font></p>
  </div>
</div>
  </div>
  <div class="row justify-content-center text-center">
<div class="card mx-1" style="width: 18rem;">
<a href="telas.php">
  <img class="card-img-top" src="img/telas.jpg" alt="Card image cap">
  </a>
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#AE1817"><h5><b>Telas</b><h5></font></p>
  </div>
</div>
  </div>
  </br>
<?php include "reutilizaveis/rodape.html"?>
</body>
</html>