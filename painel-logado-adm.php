<!----- paginas html --->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="adm/images/icone.png" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sl&Co. Produções</title>
<link rel="stylesheet" type="text/css" href="adm/style.css" />
<link rel="stylesheet" type="text/css" href="adm/css/estilo.css" />
<link href="adm/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="adm/SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="adm/js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="adm/js/jquery-ui.min.js" ></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
});
</script>
<!-- Cufon START  -->
<script type="text/javascript" src="adm/js/cufon-yui.js"></script>
<script src="adm/js/GeosansLight_500.font.js" type="text/javascript"></script>
<script type="text/javascript">
Cufon.replace('.logo', { fontFamily: 'GeosansLight' });
Cufon.replace('h1', { fontFamily: 'GeosansLight' });
Cufon.replace('h2', { fontFamily: 'GeosansLight' });
</script>    
<!-- Cufon END  -->

<body>

</head>


<div class="container">
              <?php
include ("adm/conexao.php");
?>

<?php
session_start ();
if ((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['usuario']) == true)) {
	unset ($_SESSION['nome']); 
	unset ($_SESSION ['senha']);
	header('location:adm/login.php');
	
}
$sessaoUsuario = $_SESSION ['nome'];
$sessaoSenha = $_SESSION ['senha'];
$sessaoSenhac= md5($sessaoSenha);
$con=mysqli_connect("localhost","root","","tabela");
$consulta = mysqli_query ($con, "select * from adm where nome ='$sessaoUsuario' and senha = '$sessaoSenhac'");

?>
<div id="main_container">

        
  <div class="header"><a href="adm/home.php"><div align="left"><img src="adm/logo novo definitivo 2.png" /></div></a>

	  <div class="slogan"></div> 
        
	  <div class="header_socials">
            
      </div>

    <span class="slogan"></span> 
         
    
  </div> <!--end of header--> 

    
    <div class="menu">
        <ul>
        <li><a href="adm/home.php">Home</a></li>
        <li><a href="noticias.php" >Notícias</a></li>
        <li><a href="adm/pedidos.php" >Pedidos</a></li>
        <li><a href="adm/mensagens.php" >Mensagens</a></li>
        <div class="leftbox_right"><li><a href="">Administrador</a>
                <ul><?php 
 $con=mysqli_connect("localhost","root","","tabela");
 $consulta = mysqli_query ($con, "select * from adm where nome ='$sessaoUsuario' and senha = '$sessaoSenhac'");

while ($dados = mysqli_fetch_array ($consulta))
				{?>
        <li><?php echo "<a href=\"alterarsenha.php?id=".$dados['idadm']."\">"; }?>Configurações</a></li>
        <li><a href="adm/logoff.php">Sair</a></li>
        </ul></div>
        

    </div></div>
    



    


    </body>
    </html>