<?php
include("conexao.php");
$id = $_GET ['id'];
$con=mysqli_connect("localhost","root","","tabela");
	mysqli_query ($con,"DELETE FROM mensagem WHERE idMensagem='$id'");

	mysqli_close($con);
	

?>

<script> window.location="mensagens.php"; </script>
