<?php 

if(isset($_POST ['end']) && !empty ($_POST['end']) &&
isset($_POST ['campo']) && !empty ($_POST['campo']))

{
	 $end = $_POST ['end'];
	 $desde = "From:" ."duoproducoes@hotmail.com";
	 $assunto = "Resposta ao seu pedido";
	 $mensagem = $_POST ['campo'];
	 mail ($end, $assunto, $mensagem, $desde);


}

echo "<script language='javascript' type='text/javascript'>alert('E-mail de respota enviada com sucesso para destinatário');window.location.href='pedidos.php'</script>";



?>
