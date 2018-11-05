<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">

decisao = confirm("Deseja excluir este pedido?");

if (decisao){
	<?php 
	$id = $_GET ['id'];
	 
	  echo "window.location=\"deletep.php?id=".$id."\"";
	 
	  
	 ?>
} else {

window.location="pedidos.php";

}



</SCRIPT>