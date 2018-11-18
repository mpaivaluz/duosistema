<?php
include ("conexao.php");
$curti = $_GET['id'];


$consulta= mysqli_query 
("UPDATE noticia set curtir =curtir+1 where idNoticia='$curti'");
?>



<script language='javascript' type='text/javascript'>
	window.history.go(-1);
</script>";
