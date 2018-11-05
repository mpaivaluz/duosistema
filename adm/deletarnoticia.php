<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">

decisao = confirm("Deseja excluir esta notícia?");

if (decisao){
	<?php 
	$id = $_GET ['id'];
	 
	  echo "window.location=\"deleten.php?id=".$id."\"";
	 
	  
	 ?>
} else {

window.history.go(-1);

}



</SCRIPT>