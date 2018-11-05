<?php
include("conexao.php");
$id = $_GET ['id'];
$con=mysqli_connect("localhost","root","","tabela");
	mysqli_query ($con,"DELETE FROM noticia WHERE idNoticia='$id'");

	mysqli_close($con);
	

?>

<script> window.location="../noticias.php"; </script>
