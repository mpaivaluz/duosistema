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

        
	<div class="header"><a href="home.php"><div align="left"><img src="logo novo definitivo 2.png" /></a>    <div class="leftbox_right"><br /><br /><form  action="recebeListar-n.php" method="post">
        <input type="text" placeholder="Pesquisar no site"  name="pesq"/>
        <input type="hidden" value="Buscar" name="pesquisar" />
        </form></div></div>
	  <div class="slogan"></div> 
        
	  <div class="header_socials">
            
      </div>

    <span class="slogan"></span> 
         
    
  </div> <!--end of header--> 
    
    <div class="menu">
        <ul>
        <li><a href="home.php">Pagina 2 Inicial</a></li>
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
        <li><a href="login-pedido.php">Pedidos</a></li>
        <li><a href="login2.php">Acesso</a></li>
        <li><a href="mensagem.php">Entre em contato</a></li>
        
        
        

      </ul>
      <br /><br />



        <div id="slider1" class="sliderwrapper">
	<div class="slider_content">
		<div id="featured">
        <div id="fragment-1" class="ui-tabs-panel" style="">
            <a href="pagina-aniversarios.php"><img src="images/sl1.jpg" alt="" title="" border="0" /></a>
            <div class="info" >
            <p>Aniversários! Confira aqui as fotos das festas de aniversários realizadas pela Duo Produções.</p>
            </div>
        </div>
        
        <div id="fragment-2" class="ui-tabs-panel" style="">
            <a href="pagina-formaturas.php"><img src="images/sl2.jpg" alt="" title="" border="0" /></a>
            <div class="info" >
            <p>Formaturas! Sua turma vai se formar e ficou tudo na sua mão para resolver? Calma, a nossa equipe vai te ajudar!</p>
            </div>
        </div>
        
        <div id="fragment-3" class="ui-tabs-panel" style="">
            <a href="subpag-equipe.php"><img src="images/sl3.jpg" alt="" title="" border="0" /></a>
            <div class="info" >
            <p>Acessoria, aqui você vai conhecer um pouco da equipe da Duo.</p>
            </div>
        </div>
        
        <div id="fragment-4" class="ui-tabs-panel" style="">
            <a href="pagina-casamentos.php"><img src="images/sl6.jpg" alt="" title="" border="0" /></a>
            <div class="info" >
            <p>Casamentos! Procurando o local perfeito para sua festa de casamento? Conte com a Duo!</p>
            </div>
        </div>
        
        <div id="fragment-5" class="ui-tabs-panel" style="">
            <a href="pagina-corporativos.php"><img src="images/sl5.jpg" alt="" title="" border="0" /></a>
            <div class="info" >
            <p>Eventos corporativos! Saiba como anda o funcionamento de acessoria para eventos empresariais! </p>
            </div>
        </div>
        
		  <ul class="ui-tabs-nav">                    
	       <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1">Aniversários</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-2"><a href="#fragment-2">Formaturas</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-3"><a href="#fragment-3">Promotoria</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-4"><a href="#fragment-4">Casamentos </a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-5"><a href="#fragment-5">Eventos corporativos</a></li>
	      </ul>
  
	   </div>

	</div>
      
    </div>
  
    <div class="pages_banner">
Mais sobre a empresa
</div>

A DUO Produções e Eventos é uma empresa voltada para a área de eventos e gostaria de propor um trabalho de assessoria para Comissão de Formatura. Esta proposta tem por finalidade apresentar os serviços referentes às atividades relacionadas à formatura e poderá englobar diferentes áreas...
<a href="about.php"><img src="images/bt-mais.png" /></a>

<br />
<br />

<div class="pages_banner">
Notícias
</div>

<div class="leftbox">
<h3>Formatura PUC 2014</h3><br />
<a href="pagina-formaturas.php"><img src="images/news/form.jpg" /><br /></a>
Confia aqui fotos da fachada de entrada
dos formandos de Arquitetura da PUC (2014).<br />
<a href="pagina-formaturas.php"><img src="images/bt-mais.png" /></a>
</div>

<div class="leftbox">
<h3>Casamento de Regi e Ricarinho</h3><br />
<a href="pagina-casamentos.php"><img src="images/news/casamento.jpg" /><br /></a>
Confia aqui fotos da fachada do casamento
de Regi e Ricardinho, realizado pela <i>Duo</i>.<br />
<a href="pagina-casamentos.php"><img src="images/bt-mais.png" /></a>
</div>

<div class="leftbox_right">
<h3>Festa de 15 Anos Marcelle</h3><br />
<a href="pagina-aniversarios.php"><img src="images/news/marcelle.jpg" /><br /></a>
Fotos de ensaio de aniversário da
Marcelle Alves.<br />
<a href="pagina-aniversarios.php"><img src="images/bt-mais.png" /></a><br />
<br />
<br />


</div>


</div>


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

</div>



    </body>
    </html>