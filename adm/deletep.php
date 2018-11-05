<?php
include("conexao.php");
$id = $_GET ['id'];
$con=mysqli_connect("localhost","root","","tabela");
	mysqli_query ($con,"DELETE FROM pedido WHERE idPedido ='$id'");

	mysqli_close($con);
	

?>

<script> window.location="pedidos.php"; </script>
