<?php
include ("painel-logado.php");
?>
<head>


</head>
<body>
<div class="center_content">
<h3><b>Mensagens </b></h3>


<table width="100%">
		<tr style="border: 1px solid #999">
			<td width="25%" style="border: 1px solid #999"><b>Email</b></td>
            <td width="10%" style="border: 1px solid #999"><b>Data</b></td>
			<td width="50%" style="border: 1px solid #999"><b>Mensagem</b></td>
			
		</tr>  
        
        	<?php
	include ("conexao.php"); 
	$con=mysqli_connect("localhost","root","","tabela");
	$query = mysqli_query ($con,"SELECT * FROM mensagem ORDER BY data DESC, hora DESC");
	while ($dados = mysqli_fetch_array ($query))
	{
		
		echo "<tr style=\"border: 1px solid #999\">";
				echo "<td width=\"25%\" style=\"border: 1px solid #999\">".$dados['email']."</td>";
				echo "<td width=\"10%\" style=\"border: 1px solid #999\">".date('d/m/Y', strtotime($dados['data']))?> às <?php echo "".date('H:i', strtotime($dados['hora']))."</td>";
				echo "<td width=\"50%\" style=\"border: 1px solid #999\">".$dados['mensagem']."</td>";
				echo "<td width=\"3%\" style=\"border: 1px solid #999\"><a href=\"mensagem.php?id=".$dados['idMensagem']."\"><img src=\"imagens/message_reply.png\" /></a></td>";
				echo "<td width=\"3%\" style=\"border: 1px solid #999\"><a href=\"deletarmensagem.php?id=".$dados['idMensagem']."\"> <img src=\"imagens/delete.png\" /></a></td>";
								echo "</tr>";
			}
		?>

        </table>   
        

</div> 


</body>
</html>