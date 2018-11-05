<?php
$Servidor="localhost";
$usuario="root" ;
$senha="";

$conexao= mysqli_connect($Servidor, $usuario, $senha) or die (" erro de conexão");

$banco= "tabela";
mysqli_select_db($banco, $conexao);


?>