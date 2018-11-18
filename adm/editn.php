<?php
include ("model/Conexao.class.php");
	
$id = $_POST ['id'];
$titulo = $_POST ['titulo'];
$subtitulo = $_POST ['subtitulo'];
$noticia = $_POST ['noticia'];
date_default_timezone_set('America/Sao_Paulo');
$data = date ("Y,m,d");
$hora = date('H:i');


$consulta = mysqli_query ($con, "UPDATE noticia SET titulo='$titulo', subtitulo='$subtitulo', noticia='$noticia', data='$data', hora='$hora' WHERE idNoticia='$id'");

$destino="imagens/";
$id= $_POST['id'];
$imagemAtual= $_POST['imagemAtual'];
$imagemNova= $_FILES['imagemNova']['name'];
$imagemtemporaria= $_FILES['imagemNova']['tmp_name'];

if ( $imagemNova== NULL)
{
//deixar a imagem atual no banco
mysqli_query ($con, "UPDATE noticia SET imagem1='$imagemAtual' WHERE idNoticia='$id'");
}
else{
	//atualizar a imagem selecionada no banco
	if (!file_exists($destino)){
	mkdir($destino);
	}
	$arquivo_n = $destino.$imagemNova;
	move_uploaded_file($imagemtemporaria,$arquivo_n);
	
$consulta = mysqli_query ($con, "UPDATE noticia SET imagem1='$arquivo_n' WHERE idNoticia='$id'");
	
}


/////////////////////////////////////////////////////////////////////////////////////////////
$destino="imagens/";
$id= $_POST['id'];
$imagemAtual= $_POST['imagemAtual2'];
$imagemNova= $_FILES['imagemNova2']['name'];
$imagemtemporaria= $_FILES['imagemNova2']['tmp_name'];

if ( $imagemNova== NULL)
{
//deixar a imagem atual no banco
mysqli_query ($con, "UPDATE noticia SET imagem2=$imagemAtual' WHERE idNoticia='$id'");
}
else{
	//atualizar a imagem selecionada no banco
	if (!file_exists($destino)){
	mkdir($destino);
	}
	$arquivo_n2 = $destino.$imagemNova;
	move_uploaded_file($imagemtemporaria,$arquivo_n2);
	
$consulta = mysqli_query ($con, "UPDATE noticia SET imagem2='$arquivo_n2' WHERE idNoticia='$id'");
	
}

/////////////////////////////////////////////////////////////////////////////////////////////
$destino="imagens/";
$id= $_POST['id'];
$imagemAtual= $_POST['imagemAtual3'];
$imagemNova= $_FILES['imagemNova3']['name'];
$imagemtemporaria= $_FILES['imagemNova3']['tmp_name'];

if ( $imagemNova== NULL)
{
//deixar a imagem atual no banco
mysqli_query ($con, "UPDATE noticia SET imagem3='$imagemAtual' WHERE idNoticia='$id'");
}
else{
	//atualizar a imagem selecionada no banco
	if (!file_exists($destino)){
	mkdir($destino);
	}
	$arquivo_n3 = $destino.$imagemNova;
	move_uploaded_file($imagemtemporaria,$arquivo_n3);
	
$consulta = mysqli_query ($con, "UPDATE noticia SET imagem3='$arquivo_n3' WHERE idNoticia='$id'");
	
}

/////////////////////////////////////////////////////////////////////////////////////////////
$destino="imagens/";
$id= $_POST['id'];
$imagemAtual= $_POST['imagemAtual4'];
$imagemNova= $_FILES['imagemNova4']['name'];
$imagemtemporaria= $_FILES['imagemNova4']['tmp_name'];

if ( $imagemNova== NULL)
{
//deixar a imagem atual no banco
mysqli_query ($con, "UPDATE noticia SET imagem4='$imagemAtual' WHERE idNoticia='$id'");
}
else{
	//atualizar a imagem selecionada no banco
	if (!file_exists($destino)){
	mkdir($destino);
	}
	$arquivo_n4 = $destino.$imagemNova;
	move_uploaded_file($imagemtemporaria,$arquivo_n4);
	
$consulta = mysqli_query ($con, "UPDATE noticia SET imagem4='$arquivo_n4' WHERE idNoticia='$id'");
	
}




echo "<script language='javascript' type='text/javascript'>alert('Notícia atualizada.');window.location.href='../noticias.php'</script>";
?>


