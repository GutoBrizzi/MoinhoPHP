<?php

session_start();
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){

    $usuario = $resultado->fetch_assoc();

    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];

    header("Location: index.php");
    exit();

}else{

    echo "Email ou senha incorretos";

}

?>