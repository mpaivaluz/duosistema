<?php
include ("painel.php");
?>

</head>
<body>
<div class="center_content">

<h3><b>Editar Notícias </b><br /><br /></h3>
<form action="" method="post" >
<h5>
<div class="label"><label for="titulo">Título:</label></div>
<div class="campo"><input name="titulo" type="text" id="titulo" size="72" /><br />
<br />

<div class="label"><label for="subtitulo">Subtítulo: </label></div>
<div class="campo"><input name="subtitulo" type="text" id="subtitulo" size="72" />
<br />
<br />


<div class="label"><label for="noticia">Notícia: </label></div>
<div class="campo"><textarea name="noticia" id="noticia" cols="74" rows="15"></textarea>
<br />
<br />

<div class="label"><label for="imagem">Imagem: </label></div>
 <div class="campo"><input type="file" name="imagem" id="imagem" /></div><br />

<input type="submit"  value="Salvar"/>
<font color="#0000CC">Cancelar</font>
</form>
<br />
<br />
<br />

</div> </h5>
    

</body>
</html>