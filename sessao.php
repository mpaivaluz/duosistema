<link rel="stylesheet" type="text/css" href="border.css" />

<?php
include ("conexao.php");
?>

<?php
session_start ();
if ((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) {
	unset ($_SESSION['usuario']); 
	unset ($_SESSION ['senha']);
	header('location:login.php');
	
}
$sessaoUsuario = $_SESSION ['usuario'];
$sessaoSenha = $_SESSION ['senha'];

?>

<div align="center"><div class="borda"><div align="center"><div class="stuts">
 Seja bem-vindo <span> <?php  echo $sessaoUsuario ?></span> <img src="../../snews/imagens/login.png" /> Acessar Perfil  <img src="../../snews/imagens/login.png" />  Configurações <img src="../../snews/imagens/login.png" /> <a href="logoff.php" style="text-decoration:none"> <font color="#000000">Sair</font></a></div></div></div>