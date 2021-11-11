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
<title>Conjunto e Capas</title>
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
    </br>
    <div class="row justify-content-center text-center">
             
            <div class="card mx-1"  style="width: 12rem;">
  <img class="card-img-top" src="img/Capa+boiadeiro+-+REF+2717.jpg" alt="Card image cap">
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#666666"><h6><b>Capa boiadeiro - REF: 2717</b><h6></font></p>
  </div>
</div>
  

<div class="card mx-1" style="width: 12rem;">
  <img class="card-img-top" src="img/Capa+Morcego+-+REF+2716.jpg" alt="Card image cap">
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#666666"><h6><b>Capa Morcego - REF: 2716</b><h6></font>
 </p>
  </div>
</div>


<div class="card mx-1" style="width: 12rem;">
  <img class="card-img-top" src="img/Conjunto+motoqueiro+-+REF+2712.jpg" alt="Card image cap">
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#666666"><h6><b>Conjunto motoqueiro - REF: 2712</b><h6></font>
  </p>
  </div>
</div>
  
  
<div class="card mx-1" style="width: 12rem;">
  <img class="card-img-top" src="img/Capa+de+Chuva+-+REF+2713.jpg" alt="Card image cap">
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#666666"><h6><b>Capa de Chuva - REF: 2713</b><h6></font>
  </p>
  </div>
</div>

<div class="card mx-1" style="width: 12rem;">
  <img class="card-img-top" src="img/Avental+-+REF+2719.jpg" alt="Card image cap">
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#666666"><h6><b>Avental - REF: 2719</b><h6></font>
  </p>
  </div>
</div>
  </div>
  <div class="row justify-content-center text-center">
             
            <div class="card mx-1"  style="width: 15rem;">
  <img class="card-img-top" src="img/Capa+em+Lona+Vinil+-+REF+2722.jpg" alt="Card image cap">
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#666666"><h6><b>Capa em Lona Vinil - REF: 2722</b><h6></font>
  <h6>Capas para lanchas, barcos motores e jat sky<br>
Produto em lona vinil<br>
Somente sob encomenda</h6></p>
  </div>
</div>
  

<div class="card mx-1" style="width: 15rem;">
  <img class="card-img-top" src="img/Capa+Especial+Napa+Soft+-+REF+2721.jpg" alt="Card image cap">
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#666666"><h6><b>Capa Especial Napa Soft - REF: 2721</b><h6></font>
  <h6>Capa especial de napa soft para todos os tipos de veículos.<br>
Produto com proteção interna de feltro, para melhor conservação da sua lataria</h6>
 </p>
  </div>
</div>


<div class="card mx-1" style="width: 15rem;">
  <img class="card-img-top" src="img/Capa+para+Piscina+-+REF+2723.jpg" alt="Card image cap">
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#666666"><h6><b>Capa para Piscina - REF: 2723</b><h6></font>
  <h6>Capa para piscina em material plástico bolha térmico<br>
Para a conservação da temperatura da água de sua piscina.<br>
Produto feito sob medida</h6>
  </p>
  </div>
</div>
  
  
<div class="card mx-1" style="width: 15rem;">
  <img class="card-img-top" src="img/Capa+de+Proteção+para+Piscina+-+REF+2723-A.jpg" alt="Card image cap">
  <div class="card-body" style="background-color: #E9E9E9;">
    <p class="card-text"><font color="#666666"><h6><b>Capa para Piscina - REF: 2723</b><h6></font>
  <h6>Capa para piscina em material plástico bolha térmico<br>
Para a conservação da temperatura da água de sua piscina.<br>
Produto feito sob medida</h6>
  </p>
  </div>
</div>
  </div>
  </br>
<?php include "reutilizaveis/rodape.html"?>
</body>
</html>