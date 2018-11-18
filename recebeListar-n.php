


<!----- paginas html --->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duo Produções</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
});
</script>
<!-- Cufon START  -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script src="js/GeosansLight_500.font.js" type="text/javascript"></script>
<script type="text/javascript">
Cufon.replace('.logo', { fontFamily: 'GeosansLight' });
Cufon.replace('h1', { fontFamily: 'GeosansLight' });
Cufon.replace('h2', { fontFamily: 'GeosansLight' });
</script>    
<!-- Cufon END  -->

<body>

</head>



<div class="container">

<div id="main_container">

        
	<div class="header"><a href="home.php"><div align="left"><img src="logo novo definitivo 2.png" /></a> <div class="leftbox_right"><br /><br /><form  action="recebeListar-n.php" method="post" >
        <input type="text" placeholder="Pesquisar no site" name="pesq"/>
        <input type="hidden" value="Buscar" name="pesquisar" />
        </form></div></div>
	  <div class="slogan"></div> 
        
	  <div class="header_socials">
            
      </div>

    <span class="slogan"></span> 
         
    
  </div> <!--end of header--> 
    
    <div class="menu">
        <ul>
        <li><a href="home.php">Pagina Inicial</a></li>
        <li><a href="about.php">A Empresa<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
            <ul>
            <li><a href="subpag-fundacao.php" title="">Fundação</a></li>
                        <li><a href="subpag-experiencia.php" title="">Experiência</a></li>
                        <li><a href="subpag-equipe.php" title="">Equipe</a></li>
            </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="servicos.php">Contrato<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
            <ul>
            <li><a href="sub-eventos.php" title="">Eventos realizados</a></li>
            <li><a href="sub-outros.php" title="">Outros eventos</a></li>
            <li><a href="sub-empr.php" title="">Contatos empresarias</a></li>
            <li><a href="sub-form.php" title="">Contatos formaturas</a></li>
            </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        
        <li><a href="noticias-user-n.php">Notícias</a></li>
        <li><a href="pedido.php">Pedidos</a></li>
        <li><a href="login2.php">Acesso</a></li>
        <li><a href="mensagem.php">Entre em contato</a></li>
         <div class="leftbox_right"><li>
       
        
        </li></div>
        
        

      </ul>
        
      
    </div></div>
    

<?php 
 include ("model/Conexao.class.php");
?>
<div class="center_content">

Resultados para sua pesquisa:
<?php
if (isset($_POST['pesquisar']))
{
$pesquisa= $_POST['pesq'];


$consulta= mysqli_query ($con, "select * from noticia where titulo  LIKE '%$pesquisa%' or subtitulo LIKE '%$pesquisa%' or noticia LIKE '%$pesquisa%' ");



if (mysqli_num_rows ($consulta) > 0)
{


while($dados= mysqli_fetch_array($consulta))
{
	
	?>
  <table  bordercolor="#FFFFFF" width="90%">
		<tr style="border: 1px solid #999">
        <?php 
		 echo "<td width=\"20%\" style=\"border: 1px solid #fff\"><img width=\"290\" height=\"170\" src=\"".$dados['imagem1']."\" /></td>"; ?>
			<td width="70%" style="border: 1px solid #fff"><b><?php echo "".$dados['titulo']."";?></b><br /><?php {
			  echo "".$dados['subtitulo'].""; } ?><br /><br /><?php echo "<a href=\"noticia-user-n.php?id=".$dados['idNoticia']."\"><img src=\"imagens/bt-mais.png\" /></a></td>"; ?></td>
            		</tr></table> <br /><br /><br />
					<?php }} 

else 
{
	?><br /><?php echo " Resultado para busca não encontrado. ";}}



?>


<br />  
</div>

</div> <!--end of main container-->
    
    

</body>
</html>
