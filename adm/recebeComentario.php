<?php
{
	
	
include ("model/Conexao.class.php");

$id =  $_POST['id'];
$comentario= $_POST['coment'];

$con=mysqli_connect("localhost","root","","tabela");
mysqli_query ($con, "insert into comentarios ( coment, idNoticia )values ('$comentario', $id )" );

?>

<script type="text/javascript">
alert ("Comentário publicado com sucesso");



</script>

<?php 

 
} ?>