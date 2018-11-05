<?php
include ("painel.php")

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="SpryAssets2/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets2/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../adaria/js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="../adaria/js/jquery-ui.min.js" ></script>
<script src="SpryAssets2/SpryValidationTextField.js" type="text/javascript"></script>
</head>


      
<div class="center_content"> 
              <h3><b>Cadastre-se em simples passos! É gratuito e você so tem a ganhar!</b></h3><br />
    
   <form method="post" action="Recebecadastro.php" enctype="multipart/form-data">
      <label> Nome </label><br />
     <span id="sprytextfield1">
      <input type="text" name="nome" value=""  size="72"/>
      <span class="textfieldRequiredMsg">Campo em branco.</span></span><br /><br />
        <label> Sobrenome </label><br />
     <span id="sprytextfield2">
        <input type="text" name="sobrenome" value=""  size="72"/>
        <span class="textfieldRequiredMsg">Campo em branco.</span></span><br /><br />
        <label> E-mail </label><br />
     <span id="sprytextfield3">
     <input type="text" name="email" value=""  size="72"/>
     <span class="textfieldRequiredMsg">Campo em branco.</span><span class="textfieldInvalidFormatMsg">Formato inválido.</span></span><br /><br />
        <label> Telefone </label><br />
     <span id="sprytextfield4">
     <input type="text" name="telefone" value=""  />
     <span class="textfieldRequiredMsg">Campo em branco.</span><span class="textfieldInvalidFormatMsg">Formato inválido.</span></span><br /><br />
        <label> Nome de usuário </label><br />
     <span id="sprytextfield5">
     <input type="text" name="login" value=""  size="40"/>
     <span class="textfieldRequiredMsg">Campo em branco.</span><span class="textfieldMaxCharsMsg">Número máximo de caracteres excedido.</span></span><br /><br />
        <label> Nova senha </label><br />
     <span id="sprytextfield6">
        <input type="password" name="senha" value=""  size="40"/> <span class="textfieldRequiredMsg">Campo em branco.</span></span><class="submit"><br /><br />

        <label for="imagem">Escolha uma imagem de perfil: </label><br />
<input type="file" name="imagem" id="imagem" /><br /><br />
	
    <input type="hidden" name="imagem2" value="<?php echo "$imagem"?>"/>
 
    


     <input type="submit" name="cad" value="Cadastrar">
</form>          
                    
               <br />
<br />
    
            </div>
            
            
            
        <div class="clear"></div>
        </div>  
         
        
        
        

    
</div>

</div> 


 <!--end of main container-->
    
    

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom", pattern:"(00)0000-0000", useCharacterMasking:true});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {maxChars:18});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
</script>
</body>
</html>