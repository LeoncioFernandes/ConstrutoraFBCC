<?php
    include "../conecta.inc.php";
    require_once "valida_coo.inc.php";
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
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap-icons-1.11.1/bootstrap-icons.css">
</head>
<body>
    <?php include_once('cabecalho_admin.php'); ?>

    <?php
        # área de conteúdo
        if(empty($_SERVER["QUERY_STRING"])){
            $var = "index.php";
            include_once("$var");
        }
        else{
            $pg = $_GET['pg'];
            include_once("$pg.php");
        }
    ?>
</body>
</html>