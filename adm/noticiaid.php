<?php
include ("painel-logado-user.php")

?>


<?php
	include("conexao.php");
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
				   echo " ".date('d/m/Y', strtotime($dados['data'])); }?> , às 13h47 </h5></i> </font>
            <img src="../images/perfil/Sem Título-3.png" /><br />
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
              
                    <br />
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<br/><br /><left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem2']."\" /></h3></div></center>";}?><br />
                    
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<br/><br /><left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem3']."\" /></h3></div></center>";}?><br />
                    
                   <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<br/><br /><left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem4']."\" /></h3></div></center>";}?>                   
                    
<table id="tabCores" width="400" border="0" bgcolor="#DCDCDC">
    <tr>
      <td width="70%" align="left"><img src="../images/perfil/heart icon 2.png" /> <font color="#000033">   <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){ echo"<a href=\"click.php?id=".$dados['idNoticia']."\" >  <font color=\"#000033\">Curtir  </font></a> "; ?> 
 (<?php echo $dados['curtir'];?>)
			   • Comentar </font><br />
           
</tr>
<tr>
      <td width="70%" align="left">
      
      <form  method="post">
      
      <textarea  id="campo" cols="74" rows="6" name="coment" value="coment"></textarea></td></tr>
      <input type="hidden" name="id" value="<?php echo $dados['idNoticia']; ?>" />
      <input type="hidden" name="id" value="<?php echo $dados['idNoticia']; ?>" />
      
      <?php } ?> 
        <?php 
      

			$consulta = mysqli_query ($con, "select * from cadastro where usuario ='$sessaoUsuario' and senha = '$sessaoSenha'");

			while($dados = mysqli_fetch_array($consulta)){
			
			?>
			<input type="hidden" name="teste" id="teste" value="<?php echo $dados['idCadastro']; ?>"  />
		<?php }?>
      <tr>
      <td width="70%" align="left"><input type="submit" value="Publicar comentário" name="publicar" /></form></td></tr>
      
      </table>
    
<?php

	if (isset ($_POST ['publicar' ])) {
	
include ("model/Conexao.class.php");

$id =  $_POST['id'];
$comentario= $_POST['coment'];
$iduser = $_POST['teste'];

mysqli_query ($con,"insert into comentarios ( coment, cadastro_idCadastro, idNoticia )values ('$comentario', '$iduser','$id' )" );

	} ?>





<br />

<img src="../images/perfil/Sem Título-3.png" /><br />

<font color="#000066"><b>Comentários (2) </b></font><br />
<br /></form>

<table width="65%" border="0">
		<tr>
        <td width="8%" >
				</td>
			<b><?php  $idnoticia = $_GET['id'];
			$query = mysqli_query($con, "SELECT comentarios.idComentario, comentarios.coment, comentarios.cadastro_idCadastro, comentarios.idNoticia, cadastro.idCadastro, cadastro.nome FROM comentarios INNER JOIN cadastro ON comentarios.cadastro_idCadastro = cadastro.idCadastro WHERE comentarios.idNoticia = '%idnoticia'");
			while ($dados = mysqli_fetch_array($query)) 
{
			?> <tr><?php

								echo "<td width=\"15%\">".$dados['cadastro_idCadastro']."</td>";
				echo "<td width=\"90%\">".$dados['coment']."</td>";
				
}?> </tr>
			</table> <br />


<a href="" style="text-decoration:none"><font color="#000000">Exibir anteriores</font></a>
<br />
<br />
<br />


    
</div>

</div> 
   
    

</body>
</html>