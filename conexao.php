<?php
//este arquivo conecta com o BD MYSQL
//definir as variaveis
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "empresa";
//chamar o comando para conectar
$result = mysqli_connect($servidor, $usuario, $senha, $bd);
if ($result) {
    echo "Conexão com o banco de dados realizada com sucesso!";
}
else {
    echo "Falha na conexão com o banco de dados: " . mysqli_connect_error();
}
?>