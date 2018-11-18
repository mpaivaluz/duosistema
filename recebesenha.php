<?php
if (isset ($_POST ['validar']))
{
include ("model/Conexao.class.php");
$id = $_GET ['id'];
$atual = $_POST ['atual'];
$nova = $_POST ['nova'];
$senhac = md5 ($atual);
$con=mysqli_connect("localhost","root","","tabela");
$consulta = mysqli_query ($con, "select * from usuario where idUsuario='$id' and senha='$senhac'");

if (mysqli_num_rows ($consulta)>0 )

{
mysqli_query ($con, "UPDATE usuario SET senha='".md5($nova)." 'WHERE idUsuario='$id'");	
}
else
{
	echo " senha atual incorreta";	
}
 	
}
?>


