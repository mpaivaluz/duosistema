<?php
{
include ("model/Conexao.class.php");
$email= $_POST ['email'];
$mensagem= $_POST ['campo'];
date_default_timezone_set('America/Sao_Paulo');
$data = date ("Y,m,d");
$hora = date('H:i');

$con=mysqli_connect("localhost","root","","tabela");
mysqli_query ($con, "insert into mensagem ( email, mensagem, data, hora )values ('$email', '$mensagem', '$data', '$hora')" );

?>

<script type="text/javascript">
alert ("Mensagem enviada com sucesso");
window.location="mensagem.php";
</script>

<?php } ?>