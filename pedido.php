<?php 
include ("painel-logado.php");
include ("conexao.php");
?>

<link href="SpryAssets2/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets2/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets2/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets2/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets2/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets2/SpryValidationTextarea.js" type="text/javascript"></script>
</head>

      
<body>
<div class="center_content">

<h3><b>Realizar pedido </b><br /><br /></h3>
<h5>
<form action="Recebepedido.php" method="post"><label> Gênero: </label><br />

      <span id="spryselect1">
      <select name="eventos" id="eventos">
        <option> Selecione o gênero </option>
        <?php 
	
  $con=mysqli_connect("localhost","root","","tabela");
$consulta = mysqli_query ($con, "select * from eventos;");  
$numero_Linhas= mysqli_num_rows ($consulta);
for ($i=1; $i<=$numero_Linhas; $i++)
{
	$registro= mysqli_fetch_array ($consulta); 
	$id= $registro["idEvento"];
	$eventos= $registro ["nome"];
	echo '<option value="'.$eventos.'">'.$eventos.'  </option>';
}
	
	?>
      </select>


             
<span class="selectRequiredMsg">Selecione um item.</span></span><br /><br /><div class="label"><label for="sobre">Sobre:</label></div>
<div class="campo">
<span id="sprytextfield1">
<input name="sobre" type="text" id="sobre" size="72" />
<span class="textfieldRequiredMsg">Espaço em branco.</span></span><br />
<br />



   <?php 
$con=mysqli_connect("localhost","root","","tabela");
 $consulta = mysqli_query ($con, "select * from cadastro where usuario ='$sessaoUsuario' and senha = '$sessaoSenhac'");

while ($dados = mysqli_fetch_array ($consulta))
				{?>


<input type="hidden" name="email"  size="79" value="<?php echo "$dados[email]"?>">

<?php } ?>

<div class="label"><label for="local">Local:</label></div>
<div class="campo">
<span id="sprytextfield2">
<input name="local" type="text" id="local" size="72" />
<span class="textfieldRequiredMsg">Espaço em branco.</span></span><br />
<br />

<div class="label"><label for="campo">Descrição do pedido: </label></div>
<div class="campo">
<span id="sprytextarea1">
<textarea name="campo" id="campo" cols="74" rows="10"></textarea>
<span class="textareaRequiredMsg">Espaço em branco.</span></span><br />
<br /></h5>


<input type="submit" value="Enviar" name="enviar" size="50"/><br /><br />



  </form>



</div> <b>Todas as informações enviadas devem estar de acorodo previsto no contrato empresarial</b>.</h5>
  <br />
<br />
<br />

</body>
</html>
         
		
  
        
        
        


</div> <!--end of main container-->
    
    

<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>