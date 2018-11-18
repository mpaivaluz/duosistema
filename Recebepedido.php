<?php

{
include ("model/Conexao.class.php");
$sobre= $_POST ["sobre"];
$email= $_POST ["email"];
$local= $_POST ["local"];
$campo= $_POST ["campo"];
$eventos= $_POST ["eventos"];
date_default_timezone_set('America/Sao_Paulo');
$data = date ("Y,m,d");
$hora = date('H:i');

$con=mysqli_connect("localhost","root","","tabela");
mysqli_query ($con, "insert into pedido (sobre, email, local, campo, eventos, data, hora) values ('$sobre', '$email',  '$local', '$campo', '$eventos', '$data', '$hora')" );

mysqli_close();

echo "<script language='javascript' type='text/javascript'>alert('Seu pedido foi enviado. Em breve você receberá um e-mail de resposta, aguarde e muito obrigado por confiar na Duo!');window.location.href='pedido.php'</script>";

?>



<?php } ?>