<?php

class Manager extends Conexao {

public function listarnoticias($table, $coluna){
    $pdo = parent::get_instance();
    $sql = "SELECT * FROM $table ORDER BY data DESC, $coluna DESC";
    $statement = $pdo->query($sql);
    $statement->execute();

    return $statement->fetchAll();
}
public function lernoticias($table, $id){
    $pdo = parent::get_instance();
    $sql = "SELECT * FROM $table WHERE idNoticia = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();

    return $statement->fetchAll();
}

public function login($usuario, $senha){
    $con=mysqli_connect("localhost","root","","tabela");
    $consulta = mysqli_query($con, "SELECT * FROM `cadastro` WHERE usuario='$usuario' and senha='$senha' ");

if (mysqli_num_rows ($consulta) > 0 )
{
	session_start ();
$_SESSION ['usuario']= $usuario;
$_SESSION ['senha'] = $senha;

echo "<script type='text/javascript'>

location.href='../pedido.php'</script>";	
}

else
{
echo "<script language='javascript' type='text/javascript'>alert('Usuário não encontrado! Certifique-se de que seus dados estejam corretos ou se você já possui cadastro.');window.location.href='../login-pedido.php'</script>";
}

}
    }

?>