<?php
include ("painel-logado.php");
?>
<head>


</head>
<body>
<div class="center_content">
<h3><b>Eventos </b></h3>


<table width="100%">
		<tr style="border: 1px solid #999">
			<td width="25%" style="border: 1px solid #999"><b>Id</b></td>
            <td width="25%" style="border: 1px solid #999"><b>Nome</b></td>
		
		</tr>  
        
        	<?php
	include ("conexao.php");
	$con=mysqli_connect("localhost","root","","tabela"); 
	$query = mysqli_query ($con,"SELECT * FROM eventos");
	while ($dados = mysqli_fetch_array ($query))
	{
		
		echo "<tr style=\"border: 1px solid #999\">";
				
				
                echo "<td width=\"50%\" style=\"border: 1px solid #999\">".$dados['idEvento']."</td>";
                echo "<td width=\"50%\" style=\"border: 1px solid #999\">".$dados['nome']."</td>";
				echo "<td width=\"3%\" style=\"border: 1px solid #999\"><a href=\"evento.php?id=".$dados['idEvento']."\"><img src=\"imagens/message_reply.png\" /></a></td>";
				echo "<td width=\"3%\" style=\"border: 1px solid #999\"><a href=\"deletarpedido.php?id=".$dados['idEvento']."\"> <img src=\"imagens/delete.png\" /></a></td>";
								echo "</tr>";
			}
		?>

        </table>   
        

</div> 


</body>
</html>