<?php
include ("painel-logado.php");
include ("conexao.php");
?>
<meta property="fb:app_id" content="553974688290100"/>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2&appId=553974688290100&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
	
			$idnoticia = $_GET['id'];
			$con=mysqli_connect("localhost","root","","tabela");
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



               
          <!---     <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fvendaspaivadigital%2Fposts%2F345092676240769&width=500" width="500" height="256" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                       
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
      

			$consulta = mysqli_query($con, "select * from cadastro where usuario ='$sessaoUsuario' and senha = '$sessaoSenha'");

			while($dados = mysqli_fetch_array($consulta)){
			
			?>
                       
			<input type="hidden" name="teste" id="teste" value="<?php echo $dados['idCadastro']; ?>"  />
		<?php }?>
        
        <!--- Comentar e exibir na mesma tela -->
      <tr>
      <td width="70%" align="left"><input type="submit" value="Comentar" name="publicar" /> </form> <div class="leftbox_right"><font size="-1"><b><?php $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			?> </b></font></div></td></tr>
      
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
				
}?> </tr>


			</table> <br />
<?php 
include ("rodape.php");
?>
</div> 
<br />
<br />
<br />


    
</div>

</div> 
   
    

</body>
</html>