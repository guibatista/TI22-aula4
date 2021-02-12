<!-- setando hora, sempre em primeiro lugar para que fique mais facil de se localizar/ver -->
<?php
 date_default_timezone_set('America/Sao_Paulo')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- meu css -->
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="icon" href="assets/imagem/cadastro.webp" >
</head>
<body>
    <main class="container">

        <header>
            <h2>Senac</h2>
        </header>
        <section id="id1">
              <img id="id2" src="assets/imagem/cadastro.webp"  alt="formulario de cadastro de usuario" ></div>
          </section> 


    <section id="div">

         
<!-- formulario! -->
    <div class="row">
<!-- primeira coluna -->
<div class="col-3"></div>
<!-- segunda coluna -->
<div class="col-6">
<!-- metodo padrão=GET -->
<form method="post"  action="atualizausuario.php"> 
    <div class="form-col align-items-center">

    <!-- usuario -->
      <div class="col-auto">    
        <div class="input-group-prepend">
            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg></div>
            <input type="text" class="form-control mb-" placeholder="USUÁRIO" name="usuario" maxlength="10" required autofocus>
      </div>
      </div>
    <!-- fim do usuario -->
<br>
    <!-- nome do usuario -->
    <div class="col-auto">    
        <div class="input-group-prepend">
            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></div>
            <input type="text" class="form-control mb-" placeholder="NOME" name="nome" maxlength="80" required>
      </div>
      </div>

    <!-- fim do nome do usuario -->
<br>
    <!-- email do usuario -->
    <div class="col-auto">    
        <div class="input-group-prepend">
            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg></div>
            <input type="email" class="form-control mb-" placeholder="EMAIL" name="email" maxlength="80" required>
      </div>
      </div>


    <!-- fim do email do usuario -->


      <br>
    <!-- senha -->
      <div class="col-auto">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
               <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg></div>
          </div>
          <input type="password" class="form-control" placeholder="SENHA" name="senha" id="senha" minlength="4" maxlength="8" required>
      </div>
      </div>
      <!-- fim da senha -->

      <!-- confirmar senha -->

      <div class="col-auto">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
     <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
     <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
    </svg></div>
          </div>
          <input type="password" class="form-control" placeholder="CONFIRMAR SENHA" name="confirmarsenha" id="confirmarsenha" minlength="4" maxlength="8" required>
      </div>
      </div>

      <!-- fim confirmar senha -->


      <!-- botoes -->
      <div class="col-auto">
        <button type="submit" id="enviar" class="btn btn-dark mb-2" title="ENVIE INFORMAÇÕES APARA O SERVIDOR">ENVIAR</button>

        <a href="index.php" class="btn btn-dark mb-2" title="VOLTE AO INICIO">VOLTAR</a>

        <button id="apagar" type="reset" class="btn btn-danger mb-2" title="REMOVE INFORMAÇÕES DIGITADAS">APAGAR</button>





      </div>
    </div>
  </form> 
  </div>
  </div>

</section>



        <?php
            include_once "footer.php";
        ?>

    </main>

<!-- meu arquivo JS -->
  <script src="assets/js/script.js"></script>

<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>