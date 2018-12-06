<?php
include ("painel-logado.php");
?>
<head>


</head>
<body>
<div class="center_content">
<h3><b>Evento </b></h3>



        	<?php
    include("conexao.php");
                  $idevento= $_GET['id'];
                  $con=mysqli_connect("localhost","root","","tabela");
            $query = mysqli_query($con,"SELECT * FROM eventos WHERE idEvento = '$idevento'");
            while ($dados = mysqli_fetch_array($query)){
			
		?>
        
        
 
<p>
<form action="updateevento.php" method="post">
<fieldset id="fldLogin" style="width: 20%;">
<legend align="left"><b>Detalhes </b>
</legend>
<table id="tabCores" width="20%" border="0" bgcolor="#DCDCDC">
    <tr>
      <td width="20%" align="left">Nome do evento</td>
    <tr>
    <tr>  
      <td><input type="" name="idEvento" value="<?php print $dados['idEvento']; ?>"></td>
    <tr>
    <tr>  
      <td><input type="" name="nome" value="<?php print $dados['nome']; ?>"></td>
    <tr>
    <tr>
   <td> <input type="submit" value="Alterar" ><td>
   <tr>
  
     
    
       
</table>
</fieldset></form><?php } ?>

</body>

</html>      
 
        

</div> 
    

</body><br />
<br />
<br />

</html>