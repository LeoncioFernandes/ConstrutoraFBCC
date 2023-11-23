<?php
    include "../conecta.inc.php";
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $link = $_POST['link'];
    $tag = $_POST['tag'];
    $conteudo = $_POST['conteudo'];
    if(!isset($_POST['visivel_menu'])){
        $visivel_menu = 0;
    }
    else{
        $visivel_menu = $_POST['visivel_menu'];
    }
    if(!isset($_POST['visivel_rodape'])){
        $visivel_rodape = 0;
    }
    else{
        $visivel_rodape = $_POST['visivel_rodape'];
    }

    $sql = "UPDATE paginas SET nome='$nome', link='$link', tag='$tag', conteudo='$conteudo', visivel_menu='$visivel_menu', visivel_rodape='$visivel_rodape' WHERE id=$id";

    $altera = mysqli_query($conexao, $sql);

    if(!$altera){ ?>
        <div class="row" style="background-color: rgb(245, 245, 245);">
            <div class="container px-5 py-5">
                <h3 class="text-center">Ocorreu um erro ao atualizar os dados no banco de dados</h3>
                <a class="row d-flex justify-content-center" href='?pg=listar_paginas'>Voltar</a>
            </div>
        </div>
    <?php }else{ ?>
        <div class="row" style="background-color: rgb(245, 245, 245);">
            <div class="container px-5 py-5">
                <h3 class="text-center">Página alterada com sucesso!</h3>
                <a class="row d-flex justify-content-center" href='?pg=listar_paginas'>Voltar</a>
            </div>
        </div>
    <?php }
?>