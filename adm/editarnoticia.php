<?php
include ("painel-logado.php"); 
?>


</head>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<body>
 <?php
	$id = $_GET['id'];
	$con=mysqli_connect("localhost","root","","tabela");
	$resultado = mysqli_query($con,"SELECT * FROM noticia WHERE idNoticia = '$id'");
	while($dados = mysqli_fetch_array($resultado)){
	?>
<div class="center_content">
   
<h3><b>Publicar Nova </b><br /><br /></h3>
<form action="editn.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo "$dados[idNoticia]"?>">
<h5>
<!-------------------------------------------------------------------------------------------   --->
<div class="label"><label for="titulo">Título:</label></div>
<div class="campo">
<span id="sprytextfield1">
<input name="titulo" type="text"  id="titulo" size="72" value="<?php echo "$dados[titulo]"?>">
<span class="textfieldRequiredMsg">Um valor é necessário.</span></span><br />
<br />
<!-------------------------------------------------------------------------------------------   --->
<div class="label"><label for="titulo">Subtítulo:</label></div>
<div class="campo">
<span id="sprytextfield2">
<input name="subtitulo" type="text"  id="titulo" size="72" value="<?php echo $dados['subtitulo']; ?>" />
<span class="textfieldRequiredMsg">Um valor é necessário.</span></span><br />
<br />

<!-------------------------------------------------------------------------------------------   --->
<div class="label"><label for="noticia">Notícia: </label></div>
<div class="campo">
<span id="sprytextarea1">
<textarea name="noticia" id="noticia" cols="74" rows="15"> <?php echo "$dados[noticia]"?> </textarea>
<span class="textareaRequiredMsg">Um valor é necessário.</span></span><br />
<!-------------------------------------------------------------------------------------------   --->
<label> Imagem Atual </label>
        
        <img width="65" height="40" src="<?php echo $dados['imagem1'] ?>" />
        <br/>
        
        	<input type="hidden" name="id" value="<?php echo "$dados[idNoticia]"?>">
            
          	<input type="hidden" name="imagemAtual" value="<?php echo "$dados[imagem1]" ?>" >
            
    <label> Nova Imagem: </label>
    	<input type="file" name="imagemNova"> <br /><br />

        
<!-------------------------------------------------------------------------------------------   --->
        <label> Imagem Atual </label>
        
        <img width="65" height="40" src="<?php echo $dados['imagem2'] ?>" />
        <br/>
        
        	<input type="hidden" name="id" value="<?php echo "$dados[idNoticia]"?>">
            
          	<input type="hidden" name="imagemAtual2" value="<?php echo "$dados[imagem2]" ?>" >
            
    <label> Nova Imagem: </label>
    	<input type="file" name="imagemNova2"> <br /><br />
        
<!-------------------------------------------------------------------------------------------   --->
        <label> Imagem Atual </label>
        
        <img width="65" height="40" src="<?php echo $dados['imagem3'] ?>" />
        <br/>
        
        	<input type="hidden" name="id" value="<?php echo "$dados[idNoticia]"?>">
            
          	<input type="hidden" name="imagemAtual3" value="<?php echo "$dados[imagem3]" ?>" >
            
    <label> Nova Imagem: </label>
    	<input type="file" name="imagemNova3"> <br /><br />
        
<!-------------------------------------------------------------------------------------------   --->
        <label> Imagem Atual </label>
        
        <img width="65" height="40" src="<?php echo $dados['imagem4'] ?>" />
        <br/>
        
        	<input type="hidden" name="id" value="<?php echo "$dados[idNoticia]"?>">
            
          	<input type="hidden" name="imagemAtual4" value="<?php echo "$dados[imagem4]" ?>" >
            
    <label> Nova Imagem: </label>
    	<input type="file" name="imagemNova4"> <br /><br />
<br />
<!-------------------------------------------------------------------------------------------   --->
<input type="submit" value="Atualizar"/>
<input type="reset"  value="Cancelar"/>
</form>
<br />
<br />
<br />

 </h5>

<?php } ?>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>