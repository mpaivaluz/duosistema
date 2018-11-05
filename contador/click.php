<?php
include ("model/Conexao.class.php");
$curti = $_GET['id'];

$consulta= mysqli_query 
("UPDATE curtir set curtida =curtida+1 where idcurtir='$curti'");

?>

<script language='javascript' type='text/javascript'>
	window.location.href='curtir.php'
</script>";
