<?php include("verificaLogin.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Produtos</title>

</head>

<body style="background-color:#F7F6F2; min-height:100vh; display:flex; flex-direction:column;">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#8B5E3C;">
        <div class="container">

            <a class="navbar-brand fw-bold text-white fs-3" href="index.php">
                Início
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">

                <div class="navbar-nav gap-4">

                    <a class="nav-link text-white fw-semibold" href="produtos.php">
                        Produtos
                    </a>

                    <a class="nav-link text-white fw-semibold" href="sobre.php">
                        Sobre nós
                    </a>

                </div>

            </div>
        </div>
    </nav>

    <!-- CONTEÚDO -->
    <main class="flex-fill">

        <div class="container mt-5">

            <div class="row justify-content-center text-center g-4">

                <!-- FARINHA -->
                <div class="col-lg-3 col-md-6">

                    <div class="card shadow-sm">

                        <img src="imgsMoinho/farinha.jpg" class="card-img-top">

                        <div class="card-body">

                            <h5 class="card-title">Farinha</h5>

                            <p class="card-text">R$ 10,00</p>

                            <form action="vendaProduto.php" method="post">

                                <input type="hidden" name="produto" value="farinha">
                                <input type="hidden" name="preco" value="10.00">

                                <button class="btn btn-primary">
                                    Comprar
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

                <!-- FEIJÃO -->
                <div class="col-lg-3 col-md-6">

                    <div class="card shadow-sm">

                        <img src="imgsMoinho/feijao.jpg" class="card-img-top">

                        <div class="card-body">

                            <h5 class="card-title">Feijão</h5>

                            <p class="card-text">R$ 8,00</p>

                            <form action="vendaProduto.php" method="post">

                                <input type="hidden" name="produto" value="feijao">
                                <input type="hidden" name="preco" value="8.00">

                                <button class="btn btn-primary">
                                    Comprar
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

                <!-- ARROZ -->
                <div class="col-lg-3 col-md-6">

                    <div class="card shadow-sm">

                        <img src="imgsMoinho/arroz.jpg" class="card-img-top">

                        <div class="card-body">

                            <h5 class="card-title">Arroz</h5>

                            <p class="card-text">R$ 12,00</p>

                            <form action="vendaProduto.php" method="post">

                                <input type="hidden" name="produto" value="arroz">
                                <input type="hidden" name="preco" value="12.00">

                                <button class="btn btn-primary">
                                    Comprar
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

                <!-- MILHO -->
                <div class="col-lg-3 col-md-6">

                    <div class="card shadow-sm">

                        <img src="imgsMoinho/milho.jpg" class="card-img-top">

                        <div class="card-body">

                            <h5 class="card-title">Milho</h5>

                            <p class="card-text">R$ 7,00</p>

                            <form action="vendaProduto.php" method="post">

                                <input type="hidden" name="produto" value="milho">
                                <input type="hidden" name="preco" value="7.00">

                                <button class="btn btn-primary">
                                    Comprar
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <!-- RODAPÉ -->
    <footer>

        <div class="container-fluid text-center py-3" style="background-color:#8B5E3C">

            <ul class="list-inline mb-2">

                <li class="list-inline-item">
                    <a class="link-info text-decoration-none" href="sobre.php">Sobre</a>
                </li>

                <li class="list-inline-item" id="contato">
                    <a class="link-info text-decoration-none" href="#">Contato</a>
                </li>

                <li class="list-inline-item" id="endereco">
                    <a class="link-info text-decoration-none" href="#">Endereço</a>
                </li>

            </ul>

            <small class="text-white opacity-75">
                © 2026 Moinho Novo
            </small>

        </div>

    </footer>

    <script src="rodape.js"></script>

</body>

</html>