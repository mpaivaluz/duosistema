<?php
include ("painel.php")

?>


<?php
	include("conexao.php");
			$con=mysqli_connect("localhost","root","","tabela");
			$idnoticia = $_GET['id'];
			$query = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
									
			}
		?>                 
                   <div class="center_content">
             <font face=color="#333333"> <i><h5>Publicado <?php
	  $idnoticia = $_GET['id'];
			$query = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
				 echo "".date('d/m/Y', strtotime($dados['data'])); ?> às <?php echo "".date('H:i', strtotime($dados['hora']));?> </h5></i> </font>
            <img src="images/perfil/Sem Título-3.png" /><br />
              <font size="+2"><b><?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
			  echo "".$dados['titulo'].""; } ?> </font></b><br />
              
              
              <font size="+1"><?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
			  echo "".$dados['subtitulo'].""; } ?> </font>

              
              <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<br/><br /><left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem1']."\" /></h3></div></center>";}?>
                    
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
			  echo "".$dados['noticia'].""; } ?>
              <br /><br />
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem2']."\" /></h3></div></center>";}?>
                    
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem3']."\" /></h3></div></center>";}?>
                    
                   <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem4']."\" /></h3></div></center>";}}?>            
                  
                   


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