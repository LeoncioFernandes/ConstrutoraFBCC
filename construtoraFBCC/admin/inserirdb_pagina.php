<?php include "../conecta.inc.php"; ?>
<?php
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

    $sql = "INSERT INTO paginas (nome, link, tag, conteudo, visivel_menu, visivel_rodape) VALUES 
    ('$nome', '$link', '$tag', '$conteudo', '$visivel_menu', '$visivel_rodape')";


    $insert = mysqli_query($conexao, $sql);

    if(!$insert){ ?>
        <div class="container-fluid px-5 py-5 w-25">
            <h3 class="text-center">Ocorreu um erro ao cadastrar no banco de dados</h3>
            <a class="row d-flex justify-content-center" href='?pg=cadastrar_pagina'>Tente Novamente</a>
        </div>
    <?php }else{ ?>
        <div class="container-fluid px-5 py-5 w-25">
            <h3 class="text-center">Página cadastrada com sucesso!</h3>
            <a class="row d-flex justify-content-center" href='?pg=cadastrar_pagina'>Cadastrar nova página</a>
            <a class="row d-flex justify-content-center" href='?pg=listar_paginas'>Listar Páginas</a>
        </div>
    <?php }
?>