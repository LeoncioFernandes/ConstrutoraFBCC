<?php
    include "../conecta.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id = $id";
    $exclui = mysqli_query($conexao, $sql);

    if(!$exclui){ ?>
        <div class="row" style="background-color: rgb(245, 245, 245);">
            <div class="container px-5 py-5">
                <h3 class="text-center">Ocorreu um erro ao excluir os dados no banco de dados</h3>
                <a class="row d-flex justify-content-center" href='?pg=listar_clientes'>Voltar</a>
            </div>
        </div>
    <?php }else{ ?>
        <div class="row" style="background-color: rgb(245, 245, 245);">
            <div class="container px-5 py-5">
                <h3 class="text-center">Cliente excluído com sucesso!</h3>
                <a class="row d-flex justify-content-center" href='?pg=listar_clientes'>Voltar</a>
            </div>
        </div>
<?php } ?>