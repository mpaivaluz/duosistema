<?php
include ("painel.php");
include ("model/Conexao.class.php");
include ("model/Manager.class.php");

$manager = new Manager();
$idnoticia = $_GET['id'];

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">       
                   <div class="center_content">
		<?php foreach($manager->lernoticias("noticia", $idnoticia) as $dados): ?>
             <font face=color="#333333"> <i><h5>Publicado <?php{
				 echo "".date('d/m/Y', strtotime($dados['data'])); }?> às <?php {echo "".date('H:i', strtotime($dados['hora']));}?> </h5></i> </font>
            <img src="images/perfil/Sem Título-3.png" /><br />
              <font size="+2"><b><?php
						 
		{
			  echo "".$dados['titulo'].""; } ?> </font></b><br />
              
              
              <font size="+1"><?php
						 
		{
			  echo "".$dados['subtitulo'].""; } ?> </font>

              
              <?php 
			{
              		echo "<br/><br /><left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem1']."\" /></h3></div></center>";}?>
                    
                    <?php 
			  {
			  echo "".$dados['noticia'].""; } ?>
              <br /><br />
                    <?php 
			  {
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem2']."\" /></h3></div></center>";}?>
                    
                    <?php 
			 {
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem3']."\" /></h3></div></center>";}?>
                    
                   <?php 
			  {
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem4']."\" /></h3></div></center>";}?> 
									         
                  
													    
		<?php endforeach; ?>

<table id="tabCores" width="400" border="0" bgcolor="#DCDCDC">

</tr>
<tr>
      <td width="70%" align="left">Para curtir ou comentar você deve realizar login. <a href="login-news.php" style="text-decoration:none"><font color="#000000"><b>Clique aqui</b></font></a></td></tr>
      <tr>
      <td width="70%" align="left"></td></tr>
      
      </table>


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
<br />
<br />

    
</div>
</div> 

    
	
</body>
</html>