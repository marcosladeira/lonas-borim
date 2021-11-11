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
<title>Lona leve e Lona preta</title>
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
             <div class="card mx-1"  style="width: 18rem;">
   <img class="card-img-top" src="img/Lona+Carreteiro+-+REF+2663.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Lona Carreteiro - REF: 2663</b><h6></font>
   <h6>Lona para todos os tipos de coberturas. Em varias medidas</h6></p>
   </div>
 </div>
   
 
 <div class="card mx-1" style="width: 18rem;">
   <img class="card-img-top" src="img/Lona+Leve+-+REF+2661.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Lona Leve - REF: 2661</b><h6></font>
   <h6>Lona para todos os tipos de coberturas<br>
Em várias medidas</h6></p>
   </div>
 </div>
 
 
 <div class="card mx-1" style="width: 18rem;">
   <img class="card-img-top" src="img/Lona+plástica+dupla+face+-+REF+2680.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Lona plástica dupla face - REF: 2680</b><h6></font>
   <h6>Lona para silagem<br>
Largura: 8 a 10mts</h6></p>
   </div>
 </div>
   </div>
   <div class="row justify-content-center text-center">
             <div class="card mx-1"  style="width: 18rem;">
   <img class="card-img-top" src="img/Lona+Preta+-+REF+2678.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Lona Preta - REF: 2678</b><h6></font>
   <h6>Lona para cobertura em geral
Lonas recicladas e virgem para silagem<br>
Larguras: 2 à 12mts<br>
Espessuras: 100 micras à 200 micras</h6></p>
   </div>
 </div>
   
 
 <div class="card mx-1" style="width: 18rem;">
   <img class="card-img-top" src="img/Plástico+bolha+para+piscina+-+REF+2676.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Plástico bolha para piscina - REF: 2676</b><h6></font>
   <h6>Plástico térmico para capa de piscina<br>
Largura 1,30 e sob medidas</h6></p>
   </div>
 </div>
 
 
 <div class="card mx-1" style="width: 18rem;">
   <img class="card-img-top" src="img/Vinsol+Acqua+-+REF+2710.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Vinsol Acqua - REF: 2710</b><h6></font>
   <h6>Lona especial para cobertura de piscinas<br>
Largura: 1,40 e largura sob medida
Somente na cor azul</h6></p>
   </div>
 </div>
   </div>
     </br>

<?php include "reutilizaveis/rodape.html"?>
</body>
</html>