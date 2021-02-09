<?php
    //variáveis superglobais 
    //método post -> variável superglobal $_POST[]
    //$_POST['gui','1234']

    $usuario=$_POST['usuario'];

    $senha=$_POST['senha'];

    $hashsenha=trim(password_hash($senha, PASSWORD_DEFAULT));

   $sql= "SELECT senha * FROM tbl_usuarios WHERE usuario='$usuario' ";

   include_once "conexao.php" 

// executando //

 $resultado = mysqli_query($conn, $sql);

// verificando se encontrou o usuaio cadastrado na base de dados //

if($campo=mysqli_fetch_array($resultado))
{
    // enontrou um usuario cadastrado //
// caso tenha encontrado vamos com para as senhas // 
if($campo['senha']==password_verify($senha, $hashsenha)  )
{// a senha está correta //
// usuario esta com autorização para entrar //
?>
<script>
    alert ("USUARIO LOGADO")    
    </script>

    <?php
}

else {
    {?>
    <script>
    alert("USUÁRIO NÃO CADASTRADO")
    </script>
    <?php
}
}
}

?>