<?php
include ("painel-logado.php");
?>
<head>


</head>
<body>
<div class="center_content">
<h3><b>Pedido </b></h3>



        	<?php
	include("conexao.php");
                  $idped= $_GET['id'];
                  $con=mysqli_connect("localhost","root","","tabela");
			$query = mysqli_query($con,"SELECT * FROM pedido WHERE idPedido = '$idped'");
			while ($dados = mysqli_fetch_array($query)){
			
		?>
        
        
 
<p>
<form action="recebePedido.php" method="post">
<fieldset id="fldLogin" style="width: 600px;">
<legend align="left"><b>Detalhes </b>
</legend>
<table id="tabCores" width="100%" border="0" bgcolor="#DCDCDC">
    <tr>
      <td width="20%" align="left">Data de envio:</td>
      <td width="80%" align="left"><?php  echo "".date('d/m/Y', strtotime($dados['data'])); ?> às <?php echo "".date('H:i', strtotime($dados['hora']));?> <br />
</td>
   </tr>
    <tr>
      <td width="20%" align="left"><br />De:</td>
      <td width="80%" align="left"><br /><?php {
	  echo "<h4>".$dados['email']."</h4>"; } ?> 

</td>
      </tr>
      
      <tr>
      <td width="20%" align="left"><br />Sobre:</td>
      <td width="80%" align="left"><br /><?php {
	  echo "".$dados['sobre'].""; } ?> 

</td>
      </tr>
      
      <tr>
      <td width="20%" align="left"><br /><br />
Local:</td>
      <td width="80%" align="left"><br /><br />
<?php {
	  echo "".$dados['local'].""; } ?> 


</td>
      </tr>
      
      <td width="20%" align="left"><br /><br />Mensagem:</td>
     
      
      <td width="80%" align="left"><br /><br />
<?php {
	  echo "".$dados['campo']." "; } ?>
</td>
   </tr>
   
   <tr>
      <td width="20%" align="left"><br />Tipo de evento:</td>
      <td width="80%" align="left"><br /><br /><?php {
	  echo "".$dados['eventos'].""; } ?> <br />
<br />

</td>
      </tr>
   
    <td width="20%" align="left">Responder:</td>
     
      
      <td width="80%" align="left"><textarea name="campo" id="campo" cols="60" rows="6"></textarea><br /><input type="hidden" name="end" value="<?php echo $dados['email']; ?>" /><input type="submit" size="40" value="Enviar" /></td>
      
   </tr>
   
  
     
    
       
</table>
</fieldset></form><?php } ?>

</body>

</html>      
 
        

</div> 
    

</body><br />
<br />
<br />

</html>