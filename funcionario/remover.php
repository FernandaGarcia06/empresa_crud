<?php 
//obter o ID
$id = $_GET['id'];
//criar o DELETE SQL
$sql = "delete from funcionario WHERE id=$id";
//executar
include_once("../conexao.php"); //conecta ao BD
$result = mysqli_query($conexao,$sql);
//redirecionar para listar
if ($result)
    {
        header("Location: listar.php");
    }
    else
        {
            $mysqli_error($conexao);
        }