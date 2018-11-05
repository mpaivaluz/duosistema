<?php
include ("painel-logado.php");
?>
<head>


</head>
<body>
<div class="center_content">
<h3><b>Pedidos </b></h3>


<table width="100%">
		<tr style="border: 1px solid #999">
			<td width="25%" style="border: 1px solid #999"><b>Sobre</b></td>
            <td width="10%" style="border: 1px solid #999"><b>Data</b></td>
			<td width="50%" style="border: 1px solid #999"><b>Pedido</b></td>
			
		</tr>  
        
        	<?php
	include ("conexao.php");
	$con=mysqli_connect("localhost","root","","tabela"); 
	$query = mysqli_query ($con,"SELECT * FROM pedido ORDER BY data DESC, hora DESC");
	while ($dados = mysqli_fetch_array ($query))
	{
		
		echo "<tr style=\"border: 1px solid #999\">";
				echo "<td width=\"25%\" style=\"border: 1px solid #999\">".$dados['eventos']."</td>";
				echo "<td width=\"10%\" style=\"border: 1px solid #999\">".date('d/m/Y', strtotime($dados['data']))?> às <?php echo "".date('H:i', strtotime($dados['hora']))."</td>";
				echo "<td width=\"50%\" style=\"border: 1px solid #999\">".$dados['sobre']."</td>";
				echo "<td width=\"3%\" style=\"border: 1px solid #999\"><a href=\"pedido.php?id=".$dados['idPedido']."\"><img src=\"imagens/message_reply.png\" /></a></td>";
				echo "<td width=\"3%\" style=\"border: 1px solid #999\"><a href=\"deletarpedido.php?id=".$dados['idPedido']."\"> <img src=\"imagens/delete.png\" /></a></td>";
								echo "</tr>";
			}
		?>

        </table>   
        

</div> 


</body>
</html>