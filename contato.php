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
<title>Contato</title>
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
          <div class="jumbotron text-center align-item-center d-flex flex-column justify-content-center pt-3">  
                  <div class="texto text-center p-4">
            
            <div></br>
             <h2><b>Entre em contato conosco</b></h2>
              </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4">
            <div class="texto p-4">
            
            <div>
             <h3><b>Contato</b></h3></br>
             
             <h5><b>TELEFONE</b></h5>
             <h6>(44) 3262-3999</h6>
</br>
             <h5><b>E-MAIL</b></h5>
             <h6>contato@lonasborim.com.br</h6>
</br>
             <h5><b>NOSSO ENDEREÇO</b></h5>
             <h6>Av. Colombo, 6760 - CEP 87020-000<br> Maringá - PR</h6>
             <div class="row">&nbsp;&nbsp;
                 <a class="nostyle" href="https://www.facebook.com/lonasborim/" target="_blank">
             <h2 class="bi bi-facebook"></h2> 
</a>&nbsp;&nbsp;
<a class="nostyle" href="mailto:contato@lonasborim.com.br"  >
<h2 class="bi bi-envelope"></h2> 
</a>       
</div>
              </div>
            </div>
</div>
<div class="col-sm-5">
<form name="formulario" class="needs-validation" method="post" action="enviaEmail.php" enctype="multipart/form-data">
<img src="img/logo.png" width="300" height="100">
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
                                <textarea class="form-control" placeholder="Mensagem" name="corpo" id="corpo" rows="3" required></textarea>
                            </div>
                            <button type="submit" id="btn" style="float:left;" class="btn btn-danger">ENVIAR</button>
                            <input type="hidden" name="retorno" id="retorno" value="contato.php">
                        </form>
</div>
</div></br></br>
            <?php include "reutilizaveis/rodape.html"?>
</body>
</html>