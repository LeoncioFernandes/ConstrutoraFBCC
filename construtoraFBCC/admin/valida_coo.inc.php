<?php
    if(isset($_COOKIE['login'])){
        $login = $_COOKIE['login'];
    }
    if(isset($_COOKIE['senha'])){
        $senha = $_COOKIE['senha'];
    }
    if(empty($login) OR empty($senha)){
        setcookie("login");
        setcookie("senha");
?>
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>ADMIN - CONSTRUTORA FBCC</title>

                <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
                <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
                <link rel="stylesheet" type="text/css" href="../bootstrap/css/new-colors.css">
            </head>
            <body>
                <?php include_once('cabecalho_admin.php'); ?>
                <div class="container-fluid px-5 py-5 w-25">
                    <h3 class="text-center">Login não efetuado</h3>
                    <a class="row d-flex justify-content-center" href=login.php>Clique para logar</a>
                </div>
            </body>
        </html>

<?php exit();} ?>
