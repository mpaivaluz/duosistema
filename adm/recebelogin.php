<?php
{
include ("conexao.php");
$nome = $_POST ['nome'];
$senha = $_POST ['senha'];
$senhac = md5 ($senha);
$con=mysqli_connect("localhost","root","","tabela");
$consulta = mysqli_query ($con,"SELECT * FROM `adm` WHERE nome='$nome' and senha='$senhac' ");

if (mysqli_num_rows ($consulta) > 0 )
{
	session_start ();
$_SESSION ['nome']= $nome;
$_SESSION ['senha'] = $senha;

echo "<script type='text/javascript'>

location.href='home.php'</script>";	
}

else
{
echo "<script language='javascript' type='text/javascript'>alert('Dados incorretos.');window.location.href='login.php'</script>";
}

?>

<?php } ?>