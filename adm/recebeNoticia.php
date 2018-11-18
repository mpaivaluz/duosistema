<?php 
include ("model/Conexao.class.php");
if (isset ($_FILES ['imagem1' ])) {
	
	$arquivo = $_FILES ['imagem1'];
	$pasta_dir= "imagens/noticias/";
	
	if (!file_exists ($pasta_dir)) {
		mkdir($pasta_dir);
		
	}
	
	$arquivo_n1 = $pasta_dir.$arquivo["name"]; move_uploaded_file($arquivo ["tmp_name"], $arquivo_n1); 
	
	include ("model/Conexao.class.php");
if (isset ($_FILES ['imagem2' ])) {
	
	$arquivo = $_FILES ['imagem2'];
	$pasta_dir= "imagens/noticias/";
	
	if (!file_exists ($pasta_dir)) {
		mkdir($pasta_dir);
		
	}
	
	$arquivo_n2 = $pasta_dir.$arquivo["name"]; move_uploaded_file($arquivo ["tmp_name"], $arquivo_n2); 
	
		
	if (isset ($_FILES ['imagem3' ])) {
	
	$arquivo = $_FILES ['imagem3'];
	$pasta_dir= "imagens/noticias/";
	
	if (!file_exists ($pasta_dir)) {
		mkdir($pasta_dir);
		
	}
	
	$arquivo_n3 = $pasta_dir.$arquivo["name"]; move_uploaded_file($arquivo ["tmp_name"], $arquivo_n3);


if (isset ($_FILES ['imagem4' ])) {
	
	$arquivo = $_FILES ['imagem4'];
	$pasta_dir= "imagens/noticias/";
	
	if (!file_exists ($pasta_dir)) {
		mkdir($pasta_dir);
		
	}
	
	$arquivo_n4 = $pasta_dir.$arquivo["name"]; move_uploaded_file($arquivo ["tmp_name"], $arquivo_n4);	
	
	
	
$titulo = $_POST ['titulo'];
$subtitulo = $_POST ['subtitulo'];
$noticia = $_POST ['noticia'];
date_default_timezone_set('America/Sao_Paulo');
$data = date ("Y,m,d");
$hora = date('H:i');
$like = $_POST ['like'];


$con=mysqli_connect("localhost","root","","tabela");
mysqli_query ($con, "insert into noticia (titulo, subtitulo, noticia, data, hora, imagem1, imagem2, imagem3, imagem4, curtir) values ('$titulo', '$subtitulo', '$noticia', '$data', '$hora', '$arquivo_n1', '$arquivo_n2', '$arquivo_n3', '$arquivo_n4', '$like')");


mysqli_close(); 


}

echo "<script language='javascript' type='text/javascript'>alert('Notícia adicionada com sucesso!');window.location.href='noticias.php'</script>";

	} } } ?>