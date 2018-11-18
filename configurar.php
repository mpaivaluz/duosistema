<?php
include ("conexao.php");
	
$id = $_POST ['id'];
$nome = $_POST ['nome'];
$sobre = $_POST ['sobre'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];

$con=mysqli_connect("localhost","root","","tabela");
$consulta = mysqli_query ($con, "UPDATE cadastro SET nome='$nome', sobrenome='$sobre', email='$email', telefone='$telefone' WHERE idCadastro='$id'");

$destino="imagens/";
$id= $_POST['id'];
$imagemAtual= $_POST['imagemAtual'];
$imagemNova= $_FILES['imagemNova']['name'];
$imagemtemporaria= $_FILES['imagemNova']['tmp_name'];

if ( $imagemNova== NULL)
{
//deixar a imagem atual no banco
mysqli_query ($con, "UPDATE cadastro SET imagem='$imagemAtual' WHERE idCadastro='$id'");
}
else{
	//atualizar a imagem selecionada no banco
	if (!file_exists($destino)){
	mkdir($destino);
	}
	$arquivo_n = $destino.$imagemNova;
	move_uploaded_file($imagemtemporaria,$arquivo_n);
	
$consulta = mysqli_query ($con, "UPDATE cadastro SET imagem='$arquivo_n' WHERE idCadastro='$id'");
	
}

echo "<script language='javascript' type='text/javascript'>alert('Seu perfil foi atualizado!');window.location.href='perfil.php'</script>";
?>


