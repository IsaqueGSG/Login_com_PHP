<?php

$servidor = 'localhost';
$usuario = "root";
$senha = "";
$bancoDeDados = "bd_tela_de_login";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDeDados);

if ($conexao-> connect_errno){
    echo "falha na conexão";
}


?>