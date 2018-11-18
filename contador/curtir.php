<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
include ("model/Conexao.class.php");
$con=mysqli_connect("localhost","root","","tabela");
$consulta= mysqli_query ($con, "select * from curtir");


while($dado= mysqli_fetch_array($consulta))
{
?>
<form action="click.php" method="post">
 <tr>  
  <td> <?php echo"<a href=\"click.php?id=".$dado['idcurtir']."\"> Curtir </a> "; ?> 
 <td> <?php echo $dado['curtida'];?> </td>
 </td>
<?php } ?>

</body>
</html>
