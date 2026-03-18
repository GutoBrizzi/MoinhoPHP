
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>

<body style="background-color:#F7F6F2; min-height:100vh; display:flex; align-items:center; justify-content:center;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow p-4">

                    <h3 class="text-center mb-4">Login</h3>

                    <form action="verificarLogin.php" method="post">

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control" required>
                        </div>

                        <button class="btn btn-primary w-100">
                            Entrar
                        </button>

                    </form>

                    <!-- LINK PARA CADASTRO -->
                    <p class="text-center mt-3">
                        Não tem conta?
                        <a href="cadastrarTela.php">Criar conta</a>
                    </p>
                    <!-- LINK PARA REDEFINIÇÃO DE SENHA -->
                    <p class="text-center mt-2">
                        Esqueci minha senha
                        <a href="redefinir.php">Redefinir</a>
                    </p>

                </div>

            </div>
        </div>
    </div>

</body>

</html>