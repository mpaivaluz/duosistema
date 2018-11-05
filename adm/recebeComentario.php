<?php
{
	
	
include ("model/Conexao.class.php");

$id =  $_POST['id'];
$comentario= $_POST['coment'];


mysqli_query ("insert into comentarios ( coment, idNoticia )values ('$comentario', $id )" );

?>

<script type="text/javascript">
alert ("Comentário publicado com sucesso");



</script>

<?php 

 
} ?>