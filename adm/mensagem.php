<?php
include ("painel-logado.php");
?>
<head>


</head>
<body>
<div class="center_content">
<h3><b>Mensagens </b></h3>



        	<?php
	include("conexao.php");
      $idmensagem = $_GET['id'];
      $con=mysqli_connect("localhost","root","","tabela");
			$query = mysqli_query($con,"SELECT * FROM mensagem WHERE idMensagem = '$idmensagem'");
			while ($dados = mysqli_fetch_array($query)){
			
		?>
        
        
 
<p>
<form action="recebeMensagem.php" method="post">
<fieldset id="fldLogin" style="width: 350px;">
<legend align="left">Detalhes</legend>
<table id="tabCores" width="400" border="0" bgcolor="#DCDCDC">
    <tr>
      <td width="70%" align="left">Data de envio:</td>
      <td width="30%" align="left"><?php  echo "".date('d/m/Y', strtotime($dados['data'])); ?> às <?php echo "".date('H:i', strtotime($dados['hora']));?> <br />
</td>
   </tr>
    <tr>
      <td width="70%" align="left"><br />De:</td>
      <td width="30%" align="left"><br /><?php {
	  echo "<h4>".$dados['email']."</h4>"; } ?> 

</td>
      </tr>
      
      <td width="70%" align="left">Mensagem:</td>
     
      
      <td width="30%" align="left"><br /><?php {
	  echo "".$dados['mensagem']." "; } ?><br />
<br />
</td>
   </tr>
   
    <td width="70%" align="left">Responder:</td>
     
      
      <td width="30%" align="left"><textarea name="campo" id="campo" cols="34" rows="6"></textarea><br /><input type="hidden" name="end" value="<?php echo $dados['email']; ?>" /><input type="submit" value="Enviar" /></td>
      
   </tr>
   
  
     
    
       
</table>
</fieldset></form><?php } ?>

</body>

</html>      
 
        

</div> 
    

</body>
</html>