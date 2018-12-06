<?php
include ("painel-logado.php");

?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>
<div class="center_content">
<body>


<h3>Últimas notícias</h3>



<?php
 
	$query = mysqli_query($con, "SELECT * FROM noticia ORDER BY data DESC, hora DESC");
	while ($dados = mysqli_fetch_array ($query))
	
	{ ?>
    <table  bordercolor="#FFFFFF" width="90%">
		<tr style="border: 1px solid #999">
        <?php 
	
		 echo "<td width=\"30%\" style=\"border: 1px solid #fff\"><img width=\"290\" height=\"170\" src=\"".$dados['imagem1']."\" /></td>"; ?>
			<td width="70%" style="border: 1px solid #fff"><b><?php echo "".$dados['titulo']."";?></b><br /><?php {
			  echo "".$dados['subtitulo'].""; } ?><br /><br /><?php echo "<a href=\"noticia-user.php?id=".$dados['idNoticia']."\"><img src=\"imagens/bt-mais.png\" /></a></td>"; ?></td>
            		</tr></table> 
                    
                    
                    
<?php } ?><br />
<br />


<?php 
include ("rodape.php");
?>
</div>
 <br />
<br />

    
</div>

</div> <!--end of main container-->
    
    

</body>
</html>