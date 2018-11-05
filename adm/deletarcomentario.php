<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">

decisao = confirm("Deseja excluir este comentário?");

if (decisao){
	<?php 
	$id = $_GET ['id'];
	 
	  echo "window.location=\"deletec.php?id=".$id."\"";
	 
	  
	 ?>
} else {

window.history.go(-1);

}



</SCRIPT>