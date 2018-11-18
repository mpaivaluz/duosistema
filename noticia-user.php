<?php
include ("painel-logado.php");
include ("conexao.php");
?>


<?php
	
			$idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
									
			}
		?>                 
                   <div class="center_content">
             <font face=color="#333333"> <i><h5>Publicado <?php
	  $idnoticia = $_GET['id'];
	  $con=mysqli_connect("localhost","root","","tabela");
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
				 echo "".date('d/m/Y', strtotime($dados['data'])); ?> às <?php echo "".date('H:i', strtotime($dados['hora']));?> </h5></i> </font>
            <img src="images/perfil/Sem Título-3.png" /><br />
              <font size="+2"><b><?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
			  echo "".$dados['titulo'].""; } ?> </font></b><br />
              
              
              <font size="+1"><?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
			  echo "".$dados['subtitulo'].""; } ?> </font>

              
              <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<br/><br /><left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem1']."\" /></h3></div></center>";}?>
                    
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
			  echo "".$dados['noticia'].""; } ?>
              <br /><br />
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem2']."\" /></h3></div></center>";}?>
                    
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem3']."\" /></h3></div></center>";}?>
                    
                   <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem4']."\" /></h3></div></center>";}?>            
 
 <!--- Curtir -->                    
<table id="tabCores" width="400" border="0" bgcolor="#DCDCDC">
    <tr>
      <td width="70%" align="left"> <font color="#0000">  <img src="imagens/like4like.png" width="14" height="14"/><?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){ echo"<a href=\"click.php?id=".$dados['idNoticia']." style=\"text-decoration:\"none\"\"> <font size=\"-1\"> <b>Curtir</b> </a> "; ?> 
  • <b>Comentar</b></font>	  <br />
               
               
                       
</tr>

<!---- Exibir o id do usuario no banco quando ele comenta -->
<tr>
      <td width="70%" align="left">
      
      <form  method="post">
      
      <textarea  id="campo" cols="74" rows="6" name="coment" value="coment"></textarea></td></tr>
      <input type="hidden" name="id" value="<?php echo $dados['idNoticia']; ?>" />
      <input type="hidden" name="id" value="<?php echo $dados['idNoticia']; ?>" />
      
      <?php } ?> 
        <?php 
      

			$consulta = mysqli_query ( "select * from cadastro where usuario ='$sessaoUsuario' and senha = '$sessaoSenha'");

			while($dados = mysqli_fetch_array($consulta)){
			
			?>
                       
			<input type="hidden" name="teste" id="teste" value="<?php echo $dados['idCadastro']; ?>"  />
		<?php }?>
        
        <!--- Comentar e exibir na mesma tela -->
      <tr>
      <td width="70%" align="left"><input type="submit" value="Comentar" name="publicar" /> </form> <div class="leftbox_right"><font size="-1"><b><?php $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){echo $dados['curtir'];}?> pessoas curtiram essa publicação</b></font></div></td></tr>
      
      </table>
 
    
<?php

	if (isset ($_POST ['publicar' ])) {
	
$id =  $_POST['id'];
$comentario= $_POST['coment'];
date_default_timezone_set('America/Sao_Paulo');
$data = date ("Y,m,d");
$hora = date('H:i');

mysqli_query ($con, "insert into comentarios ( coment,  idNoticia, date, hora )values ('$comentario', '$id', '$data', '$hora' )" );

	} ?>





<br />

<img src="images/perfil/Sem Título-3.png" /><br />

<font color="#0000"><b>Comentários </b></font><br />
</form>

<table width="100%" border="0">

<tr>
			<td width="5%"> </td>
            <td width="90%"> </td>
	</tr>
          
		                
			<b><?php  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM comentarios  WHERE idNoticia = '$idnoticia' ");
			while ($dados = mysqli_fetch_array($query)) 
{
			 
	 echo "<tr>";           
           

   				 echo "<td width=\"60%\">".$dados['coment']."" ?> <br /> <font color="#333333" size="-1"><b><?php  echo "".date('d/m/Y', strtotime($dados['date'])); ?> às <?php echo "".date('H:i', strtotime($dados['hora']));?></font></font></b><br /><br />
                 <?php				 echo "</tr>";
				
}}?> </tr>


			</table> <br />

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


    
</div>

</div> 
   
    

</body>
</html>