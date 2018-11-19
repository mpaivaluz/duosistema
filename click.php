<?php
include ("conexao.php");
$curti = $_GET['id'];

$con=mysqli_connect("localhost","root","","tabela");
$consulta= mysqli_query 
($con,"UPDATE noticia set curtir =curtir+1 where idNoticia='$curti'");
?>



<script language='javascript' type='text/javascript'>
	window.history.go(-1);
</script>";
