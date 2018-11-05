<?php
{
include ("model/Conexao.class.php");
$usuario = $_POST ['usuario'];
$senha= $_POST ["senha"];
$senhac = md5 ($senha);


$con=mysqli_connect("localhost","root","","tabela");
$consulta = mysqli_query ($con,"SELECT * FROM `cadastro` WHERE usuario='$usuario' and senha='$senhac' ");

if (mysqli_num_rows ($consulta) > 0 )
{
	session_start ();
$_SESSION ['usuario']= $usuario;
$_SESSION ['senha'] = $senha;

echo "<script type='text/javascript'>

location.href='home-logado.php'</script>";	
}

else
{
echo "<script language='javascript' type='text/javascript'>alert('Senha incorreta ou usuário não cadastrado.');window.location.href='login2.php'</script>";
}

?>

<?php } ?>