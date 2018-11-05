<?php
include ("adm/painel-logado.php"); 
?>

</head>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<body>
<div class="center_content">

<h3><b>Publicar Nova </b><br /><br /></h3>
<form action="recebeNoticia.php" method="post" enctype="multipart/form-data">
<h5>
<div class="label"><label for="titulo">Título:</label></div>
<div class="campo">
<span id="sprytextfield1">
<input name="titulo" type="text" id="titulo" size="72" />
<span class="textfieldRequiredMsg">Espaço não preenchido.</span></span>
<br />
<br />

<div class="label"><label for="subtitulo">Subtítulo: </label></div>
<div class="campo">
<span id="sprytextfield2">
<input name="subtitulo" type="text" id="subtitulo" size="72" />
<span class="textfieldRequiredMsg">Espaço não preenchido.</span></span><br />
<br />


<div class="label"><label for="noticia">Notícia: </label></div>
<div class="campo">
<span id="sprytextarea1">
<textarea name="noticia" id="noticia" cols="74" rows="15"></textarea>
<span class="textareaRequiredMsg">Espaço não preenchido.</span></span><br />
<br />

<div class="label"><label for="imagem">Imagem: </label></div>
 <div class="campo"><input type="file" name="imagem1" id="imagem" /></div><br />

<div class="label"><label for="imagem">Imagem: </label></div>
 <div class="campo"><input type="file" name="imagem2" id="imagem" /></div><br />
 
 <div class="label"><label for="imagem">Imagem: </label></div>
 <div class="campo"><input type="file" name="imagem3" id="imagem" /></div><br />
 
 <div class="label"><label for="imagem">Imagem: </label></div>
 <div class="campo"><input type="file" name="imagem4" id="imagem" /></div><br />
 
 <input type="hidden" name="like" value="like"/> 
<br />
<input type="submit" value="Publicar"/>
<input type="reset"  value="Cancelar"/>
</form>
<br />
<br />
<br />

</div> </h5>
    

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>