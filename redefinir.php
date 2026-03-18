<?php

include("conexao.php");

if(!isset($_POST['email']) || !isset($_POST['nova_senha'])){
    echo "erro";
    exit();
}

$email = $_POST['email'];
$nova_senha = $_POST['nova_senha'];

/* VERIFICAR SE USUÁRIO EXISTE */

$sql = "SELECT * FROM usuario WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows == 0){
    echo "erro";
    exit();
}

/* ATUALIZAR SENHA */

$sql = "UPDATE usuario SET senha='$nova_senha' WHERE email='$email'";

if($conn->query($sql) === TRUE){
    echo "sucesso";
}else{
    echo "erro";
}

?>