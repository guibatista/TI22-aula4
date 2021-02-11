<?php 
// movimentar os conteudos do formulario para as variaveis de memoria - lembrar que metodo post ultiliza a variavel superglobal $_POST[]//
$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// função trim - retira espaços antes e depois //
// $hashsenha - criptografar //


// saber o motivo de n funcionar 
// $hashsenha = trim(password_hash($senha, PASSWORD_DEFAULT)); //



// montar a string $sql com os comandos necessariospara a inserção de um  registro no banco de dados. //

$sql = "INSERT INTO tbl_usuarios (usuario, nome, email, senha) VALUES ('$usuario', '$nome', '$email','$senha')";

// incluir a rotina de conexão com o banco de dados //

include "conexao.php";

// executando o comando sql no banco de dados //

mysqli_query($conn,$sql);

// fechando a insancia da conexão // 

mysqli_close($conn);

?>



<!-- retornando para o index.php com o JS  -->
<script>

    alert('USUARIO CADASTRADO COM SUCESSO')

    window.location.href='index.php';


</script>

?>