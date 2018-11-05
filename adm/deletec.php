<?php
include("conexao.php");
$id = $_GET ['id'];
$con=mysqli_connect("localhost","root","","tabela");
	mysqli_query ($con,"DELETE FROM comentarios WHERE idComentario='$id'");

	mysqli_close($con);

?>

<script> window.history.go(-1); </script>
