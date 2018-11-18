<?php
include ("painel.php");
include ("conexao.php");
include ("model/Manager.class.php");

$manager = new Manager();

?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
<link rel="stylesheet" type="text/css" href="style.css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>
<div class="center_content">
<body>
	<h3>Últimas notícias</h3>



    <table  bordercolor="#FFFFFF" width="90%">
	<tbody>
	<?php foreach($manager->listarnoticias("noticia", "hora") as $dados): ?>
		<tr style="border: 1px solid #999">
        <?php 
	
		 echo "<td width=\"30%\" style=\"border: 1px solid #fff\"><img width=\"290\" height=\"170\" src=\"".$dados['imagem1']."\" /></td>"; ?>
			<td width="70%" style="border: 1px solid #fff"><b><?php echo "".$dados['titulo']."";?></b><br /><?php {
			  echo "".$dados['subtitulo'].""; } ?><br /><br /><?php echo "<a href=\"noticia-user-n.php?id=".$dados['idNoticia']."\"><img src=\"imagens/bt-mais.png\" /></a></td>"; ?></td>
            		</tr>
					<?php endforeach; ?>
					</tbody>
					</table> 
                    
                    
                    
<br />
<br />



<div id="footer">
	<p class="legal">
		&copy;2014, Centro Educacional Marista  <a href="http://www.solmarista.org.br/"style="text-decoration:none" target="_blank"><font color="#000000"><b>Irmão Acácio</b>
		&nbsp;&nbsp;&bull;&nbsp;&nbsp;
		Desenvolvido por <a href="http://blogcinenoticias.blogspot.com.br/"style="text-decoration:none" target="_blank"><font color="#000000"><b>Lucas Lunardelli</b></a>
		&nbsp;&nbsp;&bull;&nbsp;&nbsp;
		Direitos Autorais <a href="http://duolondrina.blogspot.com.br/"style="text-decoration:none" target="_blank"><font color="#000000"><b>Duo Produções</b></a>. </p>
	<p class="links">
		<a href="http://silvanalunardelli.com.br/" style="text-decoration:none" target="_blank"><font color="#000000"><b>Silvana Lunardelli</b></a>
		&nbsp;&bull;&nbsp;
		<a href="http://blogcinenoticias.blogspot.com.br/"style="text-decoration:none" target="_blank"><font color="#000000"><b>Outros Projetos</b> </a>
	</p>
</div>
</div>
 <br />
<br />

    
</div>

</div> <!--end of main container-->
    
    

</body>
</html>