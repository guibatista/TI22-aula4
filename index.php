<!-- setando hora, sempre em primeiro lugar para que fique mais facil de se localizar/ver -->
<?php
 date_default_timezone_set('America/Sao_Paulo')
?>
<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
<!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<!-- nosso css -->
    <link rel="stylesheet" href="assets/css/estilo.css">

    <link rel="icon" href="assets/imagem/login.png" >
</head>
<body>
    <main class="container">
        
        <header>
            <h2>Senac</h2>
        </header>

        <section>

            <!-- img -->
            <section id="id1">
              <img src="assets/imagem/login.png" alt="silhueta de uma pessoa" ></div>
          </section> 
            <br>
            <!-- formulario! -->
            <div class="row">
            <!-- primeira coluna -->
            <div class="col-3"></div>
            <!-- segunda coluna -->
            <div class="col-6">
            <!-- metodo padrão=GET -->
            <form method="post"  action="valida_login.php"> 
                <div class="form-col align-items-center">

                <!-- usuario -->
                  <div class="col-auto">    
                    <div class="input-group-prepend">
                        <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                         <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg></div>
                        <input type="text" class="form-control mb-" placeholder="USUÁRIO" name="usuario" maxlength="10">
                  </div>
                  </div>
                <!-- fim do usuario -->
                  <br><br>
                <!-- senha -->
                  <div class="col-auto">
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                           <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                          </svg></div>
                      </div>
                      <input type="password" class="form-control" placeholder="SENHA" name="senha" minlength="4" maxlength="8">
                  </div>
                  </div>
                  <!-- fim da senha -->


                  <!-- botoes -->
                  <div class="col-auto">
                    <button type="submit" class="btn btn-dark mb-2" title="ENVIE INFORMAÇÕES APARA O SERVIDOR">LOGAR</button>

                    <a href="" class="btn btn-dark mb-2" title="FAÇA SEU CADASTRO AQUI">CADASTRE-SE</a>

                    <a href="" class="btn btn-dark mb-2" title="FAZER A TROCA DA SENHA">ESQUECEU A SENHA</a>

                    <button type="reset" class="btn btn-danger mb-2" title="REMOVE INFORMAÇÕES DIGITADAS">APAGAR</button>




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


<!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
</body>
</html>