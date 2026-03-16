<?php

include("verificaLogin.php");
include("conexao.php");

$produto = $_POST['produto'];
$usuario_id = $_SESSION['id'];

if(!isset($_SESSION['id'])){
    echo "Usuário não está logado";
    exit();
}

$produto = $_POST['produto'];
$usuario_id = $_SESSION['id'];

/* DEFINIR PREÇOS */

if ($produto == "farinha") {
    $preco = 10.00;
} elseif ($produto == "feijao") {
    $preco = 8.00;
} elseif ($produto == "arroz") {
    $preco = 12.00;
} elseif ($produto == "milho") {
    $preco = 7.00;
}

/* SALVAR COMPRA */

$sql = "INSERT INTO compras (usuario_id, produto, preco)
VALUES ($usuario_id,'$produto',$preco)";

$conn->query($sql);;

?>

<!DOCTYPE html>
<html>

<head>

    <title>Pagamento</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body class="container text-center mt-5">

    <h2>Compra registrada</h2>

    <p>Produto: <?php echo $produto; ?></p>

    <p>Valor: R$ <?php echo $preco; ?></p>

    <h3>Pague com PIX</h3>

    <p>Chave PIX:</p>

    <h4>moinho@email.com</h4>

    <a href="produtos.php" class="btn btn-success">
        Voltar aos produtos
    </a>

</body>

</html>