<?php
include ("painel2.php");
?>
<br />
<br />

<html>
<head>



</head>

<body>
<h3>Realizar login administrativo para Entrar</h3>
<br />



<form name="frmLogin" action="recebelogin.php" method="post">

<p>
<fieldset id="fldLogin" style="width: 300px;">
<legend align="left">Confirmação única de login</legend>
<table id="tabCores" width="350" border="0" bgcolor="#DCDCDC">
    <tr>
      <td width="70%" align="left">Nome de usuário</td>
      <td width="30%" align="left"><input type="text" name="nome"  onFocus="javascript:this.value='';"></td>
   </tr>
    <tr>
      <td width="70%" align="left">Senha</td>
      <td width="30%" align="left"><input type="password" name="senha"  onfocus="javascript:this.value='';"></td>
   </tr>
   
  
     
    <tr>
      <td width="100%" align="left" colspan="2"><input type="submit" name="btnEnviar" value="Enviar">&nbsp;&nbsp;&nbsp;<input type="reset" name="btnLimpar" value="Limpar"></td>
   </tr>
   
   <tr>
      <td width="100%" align="left" colspan="2"> <h5><a href="../login2.php" style="text-decoration:none"><font color="#000000">Retornar ao login de usuário</a></font></h5>     </td>
        </tr>
   
       
</table>
</fieldset>
</form> <style="text-decoration:none\></style>
</body>

</html>