<?php

	include ("../model/Conexao.class.php");
	include ("../model/Manager.class.php");
$usuario = $_POST ['usuario'];
$senha= $_POST ["senha"];
$senhac = md5 ($senha);
$manager = new Manager();

if(isset($usuario)) {
	$manager->login($usuario, $senhac);
}

?>