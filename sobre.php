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
<title>Sobre</title>
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
    <div class="jumbotron6 text-center align-item-center d-flex flex-column justify-content-center pt-3">  
                  <div class="texto text-center p-4">
            
            <div></br>
             <h2><b>Atendimento diferenciado</b></h2>
              </div>
                </div>
            </div>
        
        <div class="container">
              <div class="row justify-content-center text-justify">
                <div class="col-lg-6 mx-auto">   
                </br>
                <font color="#2C2C2C"> <h3><b>Sobre Nós</b></h3></font></br>
                  <font color="#2C2C2C"><h6>A nossa empresa nasceu com a proposta de oferecer produtos de altíssima
                       qualidade, com inovação e preço combinante ao mercado nacional. Possuímos uma equipe
                        especializada e treinada capaz de gerar soluções compatíveis ao pedido do cliente, entregas
                         rápidas e o atendimento que você confia!</br></br>

                         Fundada em abril de 2005, a Lonas Borim vem ampliando seu estoque e sua segmentação
                          de produtos, desde arruelas para toldos, lonas vinil, capas de chuva, cordas,
                           alpargatas, telas industriais e outros diversos produtos.</h6></font></br>   

                           <a href="produtos.php">
                           <button style="float:left;" class="btn btn-danger">Nossos produtos</button>
                           </a>
                        </br>
                </div>
                
                <div class="col-lg-6 mx-auto">
                </br></br>
                <div class="container">
                  <div class="row">
                      <div class="col-lg-7 mx-auto">
        
                          <div class="card-body p-0">
                            
                            <img src="img/DSCN1218.jpg" width="465,6" height="350">
                          </div>     
                      </div>
                  </div>
              </div>
              </div>
            </div> 
  </div>
</br></br></br>
<?php include "reutilizaveis/rodape.html"?>
</body>
</html>