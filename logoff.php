<?php

session_start();
$_SESSION = array();
session_destroy();
echo "<script language='javascript' type='text/javascript'>alert('Você acaba de se desconectar');window.location.href='login2.php'</script>";


?>