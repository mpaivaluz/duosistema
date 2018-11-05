<?php
include ("painel.php")
?>


<html>
<head>



<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
</head>

<div class="center_content">
<body>
<h3>Realizar login</h3>
<br />



<form name="frmLogin" method="post" action="recebelogin-news.php">


<p>
<fieldset id="fldLogin" style="width: 300px;">
<legend align="left">Confirmação de login necessária</legend>
<table id="tabCores" width="350" border="0" bgcolor="#DCDCDC">
    <tr>
      <td width="70%" align="left">Nome de usuário</td>
      <td width="30%" align="left"><span id="sprytextfield1">
        <input type="text" name="usuario" id="nome"  >
        <span class="textfieldRequiredMsg">Um valor é necessário.</span></span></td>
   </tr>
    <tr>
      <td width="70%" align="left">Senha</td>
      <td width="30%" align="left"><span id="sprypassword1">
        <input type="password" name="senha" id="senha">
        <span class="passwordRequiredMsg">Um valor é necessário.</span></span></td>
   </tr>
   
  
     
    <tr>
      <td width="100%" align="left" colspan="2"><input type="submit" name="enviar" value="Enviar">&nbsp;&nbsp;&nbsp;<input type="reset" name="btnLimpar" value="Limpar"></td>
   </tr>
   
     <tr>
      <td width="100%" align="left" colspan="2">&nbsp; </td>
        </tr>
        
        <tr>
      <td width="100%" align="left" colspan="2"> <h5><a href="cadastro.php" style="text-decoration:none"><font color="#000000">Não possui cadastro?</a></font></h5>     </td>
        </tr>

        
        <tr>
      <td width="100%" align="left" colspan="2">&nbsp; </td>
        </tr>
   
   
</table>


</fieldset>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>



</body></div>

</html>