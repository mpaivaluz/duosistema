<?php 
include ("painel-logado.php")
?>



<div class="center_content">
<body>
<h3>Alterar senha</h3>
<form name="frmLogin" method="post" action="">

  
  <p>Confirmação de login necessária 
  <fieldset id="fldLogin" style="width: 300px;">
<table id="tabCores" width="350" border="0" bgcolor="#DCDCDC">
  <tr>
      <td width="70%" align="left">Senha Atual</td>
      <td width="30%" align="left"><span id="sprypassword2">
        <label for="atual"></label>
        <input type="password" name="atual" id="atual">
        <span class="passwordRequiredMsg">Um valor é necessário.</span></span>        </td>
   </tr>
    <tr>
      <td width="70%" align="left">Nova Senha</td>
      <td width="30%" align="left"><span id="sprypassword1">
        <input type="password" name="nova" id="senha">
        <span class="passwordRequiredMsg">Um valor é necessário.</span></span></td>
   </tr>
   
 
   
  
     
    <tr>
      <td width="100%" align="left" colspan="2"><input type="submit" name="enviar" value="Atualizar">&nbsp;&nbsp;&nbsp;<input type="reset" name="cancelar" value="CANCELAR"></td>
   </tr>
   
            
        <tr>
      <td width="100%" align="left" colspan="2">&nbsp; </td>
        </tr>
   
   
</table>
</fieldset>
</form>
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");

</script>

<?php
if (isset ($_POST ['enviar']))
{
include ("model/Conexao.class.php");
$id = $_GET ['id'];
$atual = $_POST ['atual'];
$nova = $_POST ['nova'];
$senhac = md5 ($atual);
$con=mysqli_connect("localhost","root","","tabela");
$consulta = mysqli_query ($con, "select * from cadastro where idCadastro='$id' and senha='$senhac'");

if (mysqli_num_rows ($consulta)>0 )

{
mysqli_query ($con, "UPDATE cadastro SET senha='".md5($nova)." 'WHERE idCadastro='$id'");

$_SESSION = array();
session_destroy();
echo "<script language='javascript' type='text/javascript'>alert('Senha alterada. Você ja pode fazer seu login com a nova senha.');window.location.href='login2.php'</script>";	
}
else
{
	echo " Sua senha atual não é esta.";	
}
 	
}
?>
</body></div>

</html>