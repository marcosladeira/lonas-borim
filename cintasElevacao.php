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
<title>Cintas de Elevação</title>
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
             
             <div class="card mx-1"  style="width: 30rem;">
   <img class="card-img-top" src="img/Fita+reboque+-+REF+2630.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Fita reboque - REF: 2630</b><h6></font>
   <h6>Para reboque de caminhões, tratores e outros.<br>
20t, 3mts</h6></p>
   </div>
 </div>
   
 
 <div class="card mx-1" style="width: 30rem;">
   <img class="card-img-top" src="img/Cinta+de+elevação+-+REF+2631.jpg" alt="Card image cap">
   <div class="card-body" style="background-color: #E9E9E9;">
     <p class="card-text"><font color="#666666"><h6><b>Cinta de elevação - REF: 2631</b><h6></font>
   <h6>Cinta para todos os tipo de elevações, para cargas.<br>
Com larguras de 50mm à 200mm<br>
Com comprimento de 80cm à 10mts<br>
Toneladas variando de 1t à 16t<br>
Produto certificado pelo INMETRO</h6></p>
   </div>
 </div>
   </div>
  </br>
<?php include "reutilizaveis/rodape.html"?>
</body>
</html>