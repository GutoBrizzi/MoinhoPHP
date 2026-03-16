<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registro</title>
</head>

<body style="background-color:#F7F6F2; min-height:100vh; display:flex; align-items:center; justify-content:center;">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card shadow p-4">

                    <h3 class="text-center mb-4">Criar Conta</h3>

                    <form action="cadastrarDB.php" method="post">

                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" required>
                        </div>

                        <button class="btn btn-success w-100">
                            Registrar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>