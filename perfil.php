<?php 
include ("painel-logado.php");
include ("conexao.php");
?>
<br />
<br />

<html>
	<head>
		<title>Janela modal</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
		<script type="text/javascript">
			$(document).ready(function(){
				$("a[rel=modal]").click( function(ev){
					ev.preventDefault();

					var id = $(this).attr("href");

					var alturaTela = $(document).height();
					var larguraTela = $(window).width();
	
					//colocando o fundo preto
					$('#mascara').css({'width':larguraTela,'height':alturaTela});
					$('#mascara').fadeIn(1000);	
					$('#mascara').fadeTo("slow",0.8);

					var left = ($(window).width() /2) - ( $(id).width() / 2 );
					var top = ($(window).height() / 2) - ( $(id).height() / 2 );
					
					$(id).css({'top':top,'left':left});
					$(id).show();	
 				});

 				$("#mascara").click( function(){
 					$(this).hide();
 					$(".window").hide();
 				});

 				$('.fechar').click(function(ev){
 					ev.preventDefault();
 					$("#mascara").hide();
 					$(".window").hide();
 				});
			});
		</script>

		<style type="text/css">

		.window{
			display:none;
			width:300px;
			height:300px;
			position:absolute;
			left:0;
			top:0;
			background:#FFF;
			z-index:9900;
			padding:10px;
			border-radius:10px;
		}

		#mascara{
			position:absolute;
  			left:0;
  			top:0;
  			z-index:9000;
  			background-color:#000;
  			display:none;
		}

		.fechar{display:block; text-align:right;}

		</style>

	</head>
<body>



<?php

$sessaoUsuario = $_SESSION ['usuario'];
$sessaoSenha = $_SESSION ['senha'];

$sessaoSenhac= md5($sessaoSenha);
$con=mysqli_connect("localhost","root","","tabela");
$consulta = mysqli_query ($con,"select * from cadastro where usuario ='$sessaoUsuario' and senha = '$sessaoSenhac'");



?>




<p>
<fieldset id="fldLogin" style="width: 300px;">
<legend align="left"><?php  
	
				
				while ($dados = mysqli_fetch_array ($consulta))
				{?><img src="imagens/icones/transparencia.png" /><a href="#janela1" rel="modal"><?php
					echo "<img width=\"80\" height=\"80\" src=\"".$dados['imagem']."\" />";
				?></a> <img src="imagens/icones/transparencia.png" /><b>Sobre você</b></legend>
<table id="tabCores" width="350" border="0" bgcolor="#DCDCDC">
       
        
    <tr>
      <td width="70%" align="left"><b>Nome</b></td>
      <td width="30%" align="left"><br />
        
        <?php echo $dados['nome']; ?>
        <br />
<br />
</td>
   </tr>
    <tr>
      <td width="70%" align="left"><b>Sobrenome</b></td>
      <td width="30%" align="left"><br />
        <?php echo $dados['sobrenome']; ?>
       <br />
<br />
</td>
   </tr>
   <tr>
      <td width="70%" align="left"><b>E-mail</b></td>
      <td width="30%" align="left"><br />
             <?php echo $dados['email']; ?>
        <br />
<br />
</td>
   </tr>
   <tr>
      <td width="70%" align="left"><b>Telefone</b></td>
      <td width="30%" align="left"><br />
        <?php echo $dados['telefone']; ?>
<br />
<br />
</td>
   </tr>
   
  
     <tr>
      <td width="100%" align="left" colspan="2">&nbsp; </td>
        </tr>
        
        <tr>
      <td width="100%" align="left" > <?php 
	
				$con=mysqli_connect("localhost","root","","tabela");
				$consulta = mysqli_query ($con,"select * from cadastro where usuario ='$sessaoUsuario' and senha = '$sessaoSenhac'");
				while ($dados = mysqli_fetch_array ($consulta))
				{ echo "<a href=\"config.php?id=".$dados['idCadastro']."\">"; ?><h4>Alterar dados</h4></a>     </td>
        </tr>
        
           <tr>
      <td width="100%" align="left" colspan="2"> <a href="pedido.php" style="text-decoration:none"><h4><font color="#000000">Realizar pedidos</h4></font></a>     </td>
        </tr>
        
        <tr>
      <td width="100%" align="left" colspan="2"> <a href="noticias-user.php" style="text-decoration:none"><font color="#000000"><h4>Acessar notícias</h4></font></a>     </td>
        </tr>
        
       
        
        <tr>
      <td width="100%" align="left" colspan="2">&nbsp; </td>
        </tr>
   
   
</table>
</fieldset>

<div class="window" id="janela1">
			<a href="#" class="fechar">X Fechar</a>
			<?php
					echo "<img width=\"280\" height=\"280\"  src=\"".$dados['imagem']."\" />";?></div>
	<!-- mascara para cobrir o site -->	
		<div id="mascara"></div>

<?php }} ?>




</body>



</html>