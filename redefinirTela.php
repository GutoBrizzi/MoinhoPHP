

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="background-color:#F7F6F2;">

    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">

        <div class="card shadow p-4" style="width:100%; max-width:400px; border-radius:15px;">

            <h3 class="text-center mb-4">Redefinir Senha</h3>

            <form id="formRedefinir">

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nova senha</label>
                    <input type="password" name="nova_senha" class="form-control" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Redefinir
                    </button>
                </div>

            </form>

        </div>
    </div>


</body>

</html>