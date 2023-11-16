<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - LOGIN</title>

    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/new-colors.css">
</head>
<body>
    <?php include_once('cabecalho_admin.php'); ?>

    <div class="container px-5 py-5 w-25">
    <h2 class="text-center">ÁREA RESTRITA</h2> 
    <form method="post" action="acesso.php" class="was-validated">
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="usuario" placeholder="Usuário" name="usuario" required>
            <label for="usuario">Usuário</label>
            <div class="invalid-feedback">Preenchimento obrigatório</div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
            <label for="senha">Senha</label>
            <div class="invalid-feedback">Preenchimento obrigatório</div>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-secondary btn-lg">Entrar</button>
        </div>
    </form>
</div>
</body>
</html>