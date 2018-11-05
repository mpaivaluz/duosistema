<?php
include ("painel-logado.php")

?>


<?php
	include("conexao.php");
			$idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
									
			}
		?>                 
            <div class="center_content">
             <font face=color="#333333"> <i><h5>Publicado <?php
	  $idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
				 echo "".date('d/m/Y', strtotime($dados['data'])); ?> às <?php echo "".date('H:i', strtotime($dados['hora']));?> </h5></i> </font>
            <img src="../images/perfil/Sem Título-3.png" /><br />
              <font size="+2"><b><?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
			  echo "".$dados['titulo'].""; } ?> </font></b><br />
              
              
              <font size="+1"><?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
			  echo "".$dados['subtitulo'].""; } ?> </font>

              
              <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<br/><br /><left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem1']."\" /></h3></div></center>";}?>
                    
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
			  echo "".$dados['noticia'].""; } ?>
              <br /><br />
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem2']."\" /></h3></div></center>";}?>
                    
                    <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem3']."\" /></h3></div></center>";}?>
                    
                   <?php 
			  $idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM noticia WHERE idNoticia = '$idnoticia'");
			while ($dados = mysqli_fetch_array($query)){
              		echo "<left><div><img width=\"553\" height=\"343\" src=\"".$dados['imagem4']."\" /></h3></div></center>";}?>                   
                    




<br />

<img src="../images/perfil/Sem Título-3.png" /><br />

<font color="#0000"><b>Comentários </b></font><br />
<br /></form>

<table width="100%" border="0">

<tr>
			<td width="5%"> </td>
            <td width="90%"> </td>
		</tr>
          
		                
			<b><?php  $idnoticia = $_GET['id'];
			$query = mysqli_query("SELECT * FROM comentarios WHERE idNoticia = '$idnoticia' ");
			while ($dados = mysqli_fetch_array($query)) 
{
			 
			 echo "<tr>";           
           

   				 echo "<td width=\"60%\">".$dados['coment']."" ?> <br /> <font color="#333333" size="-1"><?php  echo "".date('d/m/Y', strtotime($dados['date'])); ?> às <?php echo "".date('H:i', strtotime($dados['hora']));?></font>
                 <?php echo "<td width=\"3%\"><a href=\"deletarcomentario.php?id=".$dados['idComentario']."\"> <img src=\"imagens/delete.png\" /></a></td>";
				 echo "</tr>";
				
}}?> </tr>


			</table> <br />




    
</div>

</div> 
   
    

</body>
</html>