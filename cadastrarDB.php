<?php

include ("conexao.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);

    $sql = "INSERT INTO usuario (nome,email,senha) VALUES ('$nome','$email','$senha')";

    if($conn->query($sql) === TRUE){

        echo "<script>
                alert('Usuário cadastrado com sucesso!');
                window.location.href='login.php';
              </script>";
        exit();

    } else {

        echo "Erro: " . $sql . "<br>" . $conn->error;

    }
}
?>