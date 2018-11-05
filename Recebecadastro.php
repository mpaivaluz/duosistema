<?php
include ("model/Conexao.class.php");

if (isset ($_FILES ['imagem'])) {
	
	$arquivo = $_FILES ['imagem'];
	$pasta_dir= "imagens/";
	
	
	if (!file_exists ($pasta_dir)) {
		mkdir($pasta_dir);
		
	}
	
	$arquivo_n = $pasta_dir.$arquivo["name"]; move_uploaded_file($arquivo ["tmp_name"], $arquivo_n);
	


	

if (isset ($_POST ['cad']))
{	
$nome= $_POST ["nome"];
$sobrenome= $_POST ["sobrenome"];
$email= $_POST ["email"];
$telefone= $_POST ["telefone"];
$usuario= $_POST ["login"];
$senha= $_POST ["senha"];
$senhac = md5 ($senha);

mysqli_query("insert into cadastro ( nome, sobrenome, email, telefone, usuario, senha, imagem )values ('$nome', '$sobrenome', '$email', '$telefone', '$usuario', '$senhac', '$arquivo_n')" );

}
?>



<script type="text/javascript">
alert ("Cadastro concluído com sucesso");
window.location="login2.php";
</script>
<?php  }?>
