<?php
    //variáveis superglobais 
    //método post -> variável superglobal $_POST[]
    //$_POST['gui','1234']

    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    // select-leitura
   $sql= "SELECT * FROM tbl_usuarios WHERE usuario='$usuario' ";

   include_once "conexao.php"; 

// executando //

 $resultado=mysqli_query($conn, $sql);

// verificando se encontrou o usuaio cadastrado na base de dados //

if($campo=mysqli_fetch_array($resultado))

    if(password_verify($senha, $campo['senha'])){
    // enontrou um usuario cadastrado //
// caso tenha encontrado vamos com para as senhas // 


// $hashsenha= $campo['senha'];

// if (password_verify($senha, $hashsenha) )
// a senha está correta //
// usuario esta com autorização para entrar //


// armazenar o nome do usuario numa variavel de sessao
// inicializar a sessao

// $_SESSION nome da sessao 
session_start();

// vamos armazenar o conteudo que esta na variavel $campo na variavel de sessao 
$_SESSION['nome']= $campo['nome'];

?>
<script>
    window.location.href="principal.php";    
    </script>

    <?php
}

 else {
    ?>
    <script>
    alert("SENHA INCORRETA");
    window.location.href="index.php";
    </script>
    <?php
}
else {
    ?>
    <script>  
    alert ("USUARIO NAO CADASTRADO!");
    window.location.href="index.php";
  </script>
  <?php
  }
    
?>