
<?php include("verificaLogin.php"); ?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <title>Moinho Novo</title>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background-color: #F7F6F2;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#8B5E3C;">
        <div class="container">

            <a class="navbar-brand fw-bold text-white fs-3" href="index.php">
                Início
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">

                <div class="navbar-nav gap-4">

                    <a class="nav-link text-white fw-semibold" href="produtos.html.php">
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

    <main>

        <div class="container">

            <div class="row">
                <div class="col-12 mt-4">
                    <img src="imgsMoinho/imgTelaInicio.jpeg" class="img-fluid rounded shadow">
                </div>
            </div>

            <div class="container mt-5">

                <div class="row justify-content-center g-4">

                    <div class="col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="imgsMoinho/imgPrimeiroCard.jpg" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title">Farinhas</h5>
                                <p class="card-text">
                                    Clique abaixo para ver nossos produtos
                                </p>
                                <a href="produtos.php" class="btn btn-primary">
                                    Ver Produtos
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="imgsMoinho/imgSegundoCard.jpg" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title">Feijões</h5>
                                <p class="card-text">
                                    Clique abaixo para ver nossos produtos
                                </p>
                                <a href="produtos.php" class="btn btn-primary">
                                    Ver Produtos
                                </a>
                            </div>
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
                    <a class="footer-link link-info text-decoration-none" href="sobre.php">
                        Sobre
                    </a>
                </li>

                <li id="contato" class="list-inline-item">
                    <a class="footer-link link-info text-decoration-none" href="#">
                        Contato
                    </a>
                </li>

                <li id="endereco" class="list-inline-item">
                    <a class="footer-link link-info text-decoration-none" href="#">
                        Endereço
                    </a>
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