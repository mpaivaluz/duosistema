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
      <td width="70%" align="left">Para comentar você deve realizar login. <a href="login-news.php" style="text-decoration:none"><font color="#000000"><b>Clique aqui</b></font></a></td></tr>
      <tr>
      <td width="70%" align="left"></td></tr>
      
      </table>


<?php 
include ("rodape.php");
?>
</div> 
<br />


<br />
<br />
<br />

    
</div>

</div> 
    
    

</body>
</html>