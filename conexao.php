<?php
// comando que ultiliza 4 informações//
$servidor = "localhost";
$usuario = "root";
$senhabanco = "root";
$bancodados = "db_clientes";

$conn = mysqli_connect($servidor, $usuario, $senhabanco, $bancodados);

// checa conexão //
if (mysqli_connect_errno()){
    echo "falha na conexão com o servidor MySQL: " .
    mysqli_connect_error();
}
$conn->set_charset("utf8");

?>