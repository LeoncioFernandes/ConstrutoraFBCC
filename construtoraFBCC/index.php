<?php include "conecta.inc.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtora FBCC</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/new-colors.css">
  </head>

  <body>

    <?php include_once('cabecalho.php'); ?>

    <?php
      # área de conteúdo
      if(empty($_SERVER["QUERY_STRING"])){
        $var = "principal.php";
        include_once("$var");
      }
      else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
      }
    ?>

    <?php include_once('rodape.php'); ?>
  
  </body>
</html>