<?php
$id = $_POST['idEvento'];
$nome = $_POST['nome'];

$con=mysqli_connect("localhost","root","","tabela"); 
$query = mysqli_query ($con,"UPDATE eventos SET nome=$nome 'WHERE idEvento=$id ");
$exec = ($query);
?>