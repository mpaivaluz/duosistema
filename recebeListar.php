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

  


</head>
<div class="container">

        <?php
include ("model/Conexao.class.php");
?>

<?php
session_start ();
if ((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) {
	unset ($_SESSION['usuario']); 
	unset ($_SESSION ['senha']);
	header('location:login2.php');
	
}
$sessaoUsuario = $_SESSION ['usuario'];
$sessaoSenha = $_SESSION ['senha'];
$sessaoSenhac= md5($sessaoSenha);


$consulta = mysqli_query ( "select * from cadastro where usuario ='$sessaoUsuario' and senha = '$sessaoSenhac'");

?>
<div id="main_container">

        
	<div class="header"><a href="home-logado.php"><div align="left"><img src="logo novo definitivo 2.png" /></a> </div>
	  <div class="slogan"></div> 
        
	  <div class="header_socials">
            
      </div>

    <span class="slogan"></span> 
         
    
  </div> <!--end of header--> 


    <div class="menu">
        <ul>
        <li><a href="home-logado.php">Pagina Inicial</a></li>
        <li><a href="about-logado.php">A Empresa<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
            <ul>
            <li><a href="subpag-fundacao-logado.php" title="">Fundação</a></li>
                        <li><a href="subpag-experiencia-logado.php" title="">Experiência</a></li>
                        <li><a href="subpag-equipe-logado.php" title="">Equipe</a></li>
            </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="servicos-logado.php">Contrato<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
            <ul>
            <li><a href="sub-eventos-logado.php" title="">Eventos realizados</a></li>
            <li><a href="sub-outros-logado.php" title="">Outros eventos</a></li>
            <li><a href="sub-empr-logado.php" title="">Contatos empresarias</a></li>
            <li><a href="sub-form-logado.php" title="">Contatos formaturas</a></li>
            </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        
        <li><a href="noticias-user.php">Notícias</a></li>
        <li><a href="pedido.php">Pedidos</a></li>
          <li>
     
        
        </li>
                <div class="leftbox_right"><li><a href="">
                
                <?php 
	
				
				while ($dados = mysqli_fetch_array ($consulta))
				{
					echo "<img width=\"30\" height=\"30\" src=\"".$dados['imagem']."\" />";
				?><img src="imagens/icones/transparencia.png" />
				 <?php echo "".$dados['nome'].""; ?>  <?php echo "".$dados['sobrenome'].""; }?><img src="imagens/icones/transparencia.png" />▼</a>
          
           <?php 
 
 $consulta = mysqli_query ( "select * from cadastro where usuario ='$sessaoUsuario' and senha = '$sessaoSenhac'");

while ($dados = mysqli_fetch_array ($consulta))
				{?>
                 
        <ul>
        <li><?php echo "<a href=\"perfil.php?id=".$dados['idCadastro']."\">"; ?>Perfil</a></li>


        <li><?php echo "<a href=\"config.php?id=".$dados['idCadastro']."\">"; }?> Configurações </a></li>
        <li><a href="logoff.php">Sair</a></li>
        </ul></li></div>
        
        

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


$consulta= mysqli_query ("select * from noticia where titulo  LIKE '%$pesquisa%' or subtitulo LIKE '%$pesquisa%' or noticia LIKE '%$pesquisa%' ");



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
			  echo "".$dados['subtitulo'].""; } ?><br /><br /><?php echo "<a href=\"noticia-user.php?id=".$dados['idNoticia']."\"><img src=\"imagens/bt-mais.png\" /></a></td>"; ?></td>
            		</tr></table> <br /><br /><br />
					<?php }} 

else 
{
	echo " Resultado para busca não encontrado. ";}}



?>

<br /><br />

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
