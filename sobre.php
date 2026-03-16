

<?php include("verificaLogin.php"); ?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Sobre nós</title>

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

    <main>

        <div class="container mt-5">

            <div class="row">

                <div class="col-12 text-center">

                    <h1 class="mb-4">MOINHO NOVO</h1>

                    <p>
                        No nome é novo, mas trata-se de um velho moinho, um dos poucos que mantém o processo de
                        fabricação artesanal na moagem de milho, arroz e trigo, mas ao mesmo tempo atende à demanda por
                        novos produtos.
                    </p>

                    <p>
                        No local em que foi fundado em 1966, o Moinho Novo mantém o mesmo sistema de produção artesanal
                        de farinha de quando iniciou as atividades no município de Ijuí. Os grãos são moídos em moinho
                        de pedra e toda produção mantém as raízes antigas.
                    </p>

                    <p>
                        O proprietário, José Rubem Brizzi, herdou de seus pais David e Araci Brizzi, e assumiu os
                        negócios nos anos de 1970, com produção de farinha para alimentação humana e também ração
                        para animais.
                    </p>

                    <p>
                        Atualmente no moinho é realizada a moagem de milho, arroz, trigo integral e trigo sem glúten
                        (para atender ao público que tem intolerância ao glúten). Para aqueles que apostam numa
                        alimentação com fibras e grãos, oferece uma ampla gama de produtos.
                    </p>

                </div>

            </div>

            <!-- IMAGENS -->

            <div class="row text-center mt-4 justify-content-center g-4">

                <div class="col-md-5">
                    <img src="imgsMoinho/moinho.jpeg" class="img-fluid rounded shadow" alt="Moinho">
                </div>

                <div class="col-md-5">
                    <img src="imgsMoinho/atendimentoMoinho.jpeg" class="img-fluid rounded shadow" alt="Atendimento">
                </div>

            </div>

        </div>

    </main>

    <!-- RODAPÉ -->

    <footer>

        <div class="container-fluid text-center py-3 mt-3" style="background-color:#8B5E3C">

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

    <script type="module" src="rodape.js"></script>

</body>

</html>