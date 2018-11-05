<?php

session_start();
$_SESSION = array();
session_destroy();
echo "<script language='javascript' type='text/javascript'>;window.location.href='login.php'</script>";


?>