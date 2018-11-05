<?php
include ("painel.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="center_content"> 
  <h3><b>Envie-nos uma mensagem</b></h3><br />
    
   <form method="post" action="Recebemensagem.php" enctype="multipart/form-data">
    
    <label> E-mail: </label><br />
     <span id="sprytextfield1">
     <input type="text" name="email"  size="53"/>
     <span class="textfieldRequiredMsg">Um valor é necessário.</span><span class="textfieldInvalidFormatMsg">Formato inválido.</span></span><br />
<br />

     <div class="label"><label for="campo">Mensagem: </label></div>
	<div class="campo"> <span id="sprytextarea1">
			<textarea name="campo" id="campo" cols="55" rows="10"></textarea>
	<span class="textareaRequiredMsg">Um valor é necessário.</span></span><br />

     
<input type="submit" name="commit" value="Enviar">
</form>          
                    
                   
</div>
            
            
            
        <div class="clear"></div>
        </div>  
         
        
        
        

    
</div>

</div> 


 <!--end of main container-->
    
    
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email", {useCharacterMasking:true});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>


</body>
</html>