<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">

decisao = confirm("Deseja excluir esta mensagem?");

if (decisao){
	<?php 
	$id = $_GET ['id'];
	 
	  echo "window.location=\"delete.php?id=".$id."\"";
	 
	  
	 ?>
} else {

window.history.go(-1);

}



</SCRIPT>