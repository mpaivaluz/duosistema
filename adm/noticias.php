<?php
include ("painel-logado-adm.php");
?>

</head>
<body>
<div class="center_content">

<h3>
<a href="new-noticias.php" style="text-decoration:none"><img src="../imagens/icones/update1.png" /> <font color="#00000">Nova postagem</font></a>
<br /><br />

<b>Notícias </b><br />
</h3>

<table width="100%">
		<tr style="border: 1px solid #999">
			<td width="15%" style="border: 1px solid #999"><b>Data</b></td>
			<td width="70%" style="border: 1px solid #999"><b>Titulo</b></td>
			
		</tr>  
        
        	<?php
	include ("conexao.php"); 
	$con=mysqli_connect("localhost","root","","tabela");
	$query = mysqli_query ($con, "SELECT * FROM noticia ORDER BY data DESC, hora DESC");
	while ($dados = mysqli_fetch_array ($query))
	{
		
		echo "<tr style=\"border: 1px solid #999\">";
				echo "<td width=\"15%\" style=\"border: 1px solid #999\">".date('d/m/Y', strtotime($dados['data']))?> às <?php echo "".date('H:i', strtotime($dados['hora'])). "</td>";
				echo "<td width=\"70%\" style=\"border: 1px solid #999\">".$dados['titulo']."</td>";
				echo "<td width=\"3%\" style=\"border: 1px solid #999\"><a href=\"noticia.php?id=".$dados['idNoticia']."\"><img src=\"imagens/view-icone.png\" /></a></td>";
				echo "<td width=\"3%\" style=\"border: 1px solid #999\"><a href=\"editarnoticia.php?id=".$dados['idNoticia']."\"> <img src=\"imagens/edit.png\" /></a></td>";
				echo "<td width=\"3%\" style=\"border: 1px solid #999\"><a href=\"deletarnoticia.php?id=".$dados['idNoticia']."\"> <img src=\"imagens/delete.png\" /></a></td>";
				
								echo "</tr>";
			}
		?>

        </table>   
         
        
        
        

</div> 
    

</body>
</html>