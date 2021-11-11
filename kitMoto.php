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
<title>Kit Moto</title>
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
   <img class="card-img-top" src="img/Kit+moto+catraca+-+REF+2592.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Kit moto catraca - REF: 2592</b><h6></font>
   <h6>Para amarração de moto</h6></p>
   </div>
 </div>
   
 
 <div class="card mx-1" style="width: 18rem;">
   <img class="card-img-top" src="img/Kit+veiculo+cegonha+-+REF+2596.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Kit veiculo cegonha - REF: 2596</b><h6></font>
   <h6>Para fixação de carro em plataforma</h6></p>
   </div>
 </div>
 
 
 <div class="card mx-1" style="width: 18rem;">
   <img class="card-img-top" src="img/Fita+-+REF+2642.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Fita - REF: 2642</b><h6></font>
   <h6>Fita para marração de cargas
3t, 5t e 10t</h6></p>
   </div>
 </div>
 <div class="card mx-1" style="width: 18rem;">
   <img class="card-img-top" src="img/Kit+moto+presilha+-+REF+2586.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Kit moto presilha - REF: 2586</b><h6></font>
   <h6>Para amarração de moto</h6></p>
   </div>
 </div>
   </div>
     </br>

<?php include "reutilizaveis/rodape.html"?>
</body>
</html>