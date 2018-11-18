<?php 
include ("painel-logado.php");
include ("conexao.php");
?>
<br />
<br />

<html>
<head>



<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>

<body>
<h3>Atualizar informações</h3>
<br />

<?php

//include ("model/Conexao.class.php");
$id = $_GET['id'];
$con=mysqli_connect("localhost","root","","tabela");
$query = mysqli_query ($con, "select * from cadastro where idCadastro='$id'");

while ($dados = mysqli_fetch_array($query)) 
	
{ ?>




<form name="dados" action="configurar.php" method="post" enctype="multipart/form-data" >

<p>
<fieldset id="fldLogin" style="width: 300px;">
<legend align="left">Dados definidos na última atualização</legend>
<table id="tabCores" width="350" border="0" bgcolor="#DCDCDC">
      <tr>
            <td width="30%" align="left">
               <br><input type="hidden" name="id" value="<?php echo "$dados[idCadastro]"?>">
      </td>
   </tr>
    
    
    <tr>
      <td width="70%" align="left">Nome</td>
      <td width="30%" align="left"><br />
        <span id="sprytextfield1">
        <input type="text" name="nome" size="79" value="<?php echo "$dados[nome]"?>">
        <span class="textfieldRequiredMsg">Campo em branco.</span></span><br />
<br />
</td>
   </tr>
    <tr>
      <td width="70%" align="left">Sobrenome</td>
      <td width="30%" align="left"><br />
        <span id="sprytextfield2">
        <input type="text" name="sobre"  size="79" value="<?php echo "$dados[sobrenome]"?>">
        <span class="textfieldRequiredMsg">Campo em branco.</span></span><br />
<br />
</td>
   </tr>
   <tr>
      <td width="70%" align="left">E-mail</td>
      <td width="30%" align="left"><br />
        <span id="sprytextfield3">
        <input type="text" name="email"  size="79" value="<?php echo "$dados[email]"?>">
        <span class="textfieldRequiredMsg">Campo em branco.</span><span class="textfieldInvalidFormatMsg">Formato inválido.</span></span><br />
<br />
</td>
   </tr>
   <tr>
      <td width="70%" align="left">Telefone</td>
      <td width="30%" align="left"><br />
        <span id="sprytextfield4">
        <input type="text" name="telefone" size="40" value="<?php echo "$dados[telefone]"?>">
        <span class="textfieldRequiredMsg">Campo em branco.</span><span class="textfieldInvalidFormatMsg">Formato inválido.</span></span><br />
<br />
</td>
   </tr>
   
     <td width="70%" align="left">Foto</td>
      <td width="30%" align="left"><br />
               
		<label> Imagem Atual </label>
        
        <img width="45" height="45" src="<?php echo $dados['imagem'] ?>" />
        <br/>
        
        	<input type="hidden" name="id" value="<?php echo "$dados[idCadastro]"?>">
            
          	<input type="hidden" name="imagemAtual" value="<?php echo "$dados[imagem]" ?>" >
            
    <label> Nova Imagem: </label>
    	<input type="file" name="imagemNova">
        
	
        
<br />
</td>
   </tr>
     
  
     
    <tr>
      <td width="100%" align="left" colspan="2"><br /><br /><input type="submit" name="btnEnviar" value="Atualizar">&nbsp;&nbsp;&nbsp;<input type="reset" name="btnLimpar" value="Limpar"></td>
   </tr>
   
     <tr>
      <td width="100%" align="left" colspan="2">&nbsp; </td>
        </tr>
        
        <tr>
      <td width="100%" align="left" colspan="2"> <h5> 
      <?php 
 
 $consulta = mysqli_query ($con, "select * from cadastro where usuario ='$sessaoUsuario' and senha = '$sessaoSenhac'");

while ($dados = mysqli_fetch_array ($consulta))
				{?>
      
	  <script type="text/javascript">
function poup ()
{
	window.open('alterarsenha.php', 'pagina',"width=400 height=400 left=400 top=300");
}
</script> 
	  

         <?php echo "<a href=\"alterarsenha.php?id=".$dados['idCadastro']."\ class=\"cordlink\"> Alterar a senha</a>";?></font></h5>     </td>
        </tr>
        
       
        
        <tr>
      <td width="100%" align="left" colspan="2">&nbsp; </td>
        </tr>
   
   
</table>
</fieldset>
</form>
<?php }} ?>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom", pattern:"(00)0000-0000", useCharacterMasking:true});
</script>

</body>

</html>