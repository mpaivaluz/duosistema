﻿<!----- paginas html --->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/icone.png" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sl&Co. Produções</title>
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

        
  <div class="header"><a href="home.php"><div align="left"><img src="logo novo definitivo 2.png" /></div></a>
  <form  action="recebeListar-n.php" method="post">
        <input type="text" placeholder="Pesquisar no site"  name="pesq"/>
        <input type="hidden" value="Buscar" name="pesquisar" />
        </form>
	  <div class="slogan"></div> 
        
	  <div class="header_socials">
            
      </div>

    <span class="slogan"></span> 
         
    
  </div> <!--end of header--> 
 
    
    <div class="menu">
        <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="noticias.php" >Notícias</a></li>
        <li><a href="pedidos.php" >Pedidos</a></li>
        <li><a href="mensagens.php" >Mensagens</a></li>
        
        

    </div></div>
    


    </body>
    </html>