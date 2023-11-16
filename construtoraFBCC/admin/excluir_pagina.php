<?php
    include "../conecta.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM paginas WHERE id = $id";
    $exclui = mysqli_query($conexao, $sql);

    if(!$exclui){ ?>
        <div class="container-fluid px-5 py-5 w-25">
            <h3 class="text-center">Ocorreu um erro ao excluir os dados no banco de dados</h3>
            <a class="row d-flex justify-content-center" href='?pg=listar_paginas'>Voltar</a>
        </div>
    <?php }else{ ?>
        <div class="container-fluid px-5 py-5 w-25">
            <h3 class="text-center">Página excluída com sucesso!</h3>
            <a class="row d-flex justify-content-center" href='?pg=listar_paginas'>Voltar</a>
        </div>
<?php } ?>