<?php
    include "../conecta.inc.php";
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    if(!isset($_POST['ativo'])){
        $ativo = 0;
    }
    else{
        $ativo = $_POST['ativo'];
    }
    
    $sql = "UPDATE clientes SET nome='$nome', login='$login', ativo='$ativo' WHERE id=$id";

    $altera = mysqli_query($conexao, $sql);

    if(!$altera){ ?>
        <div class="row" style="background-color: rgb(245, 245, 245);">
            <div class="container px-5 py-5">
                <h3 class="text-center">Ocorreu um erro ao atualizar os dados no banco de dados</h3>
                <a class="row d-flex justify-content-center" href='?pg=listar_clientes'>Voltar</a>
            </div>
        </div>
    <?php }else{ ?>
        <div class="row" style="background-color: rgb(245, 245, 245);">
            <div class="container px-5 py-5">
                <h3 class="text-center">Cliente alterado com sucesso!</h3>
                <a class="row d-flex justify-content-center" href='?pg=listar_clientes'>Voltar</a>
            </div>
        </div>
    <?php }
?>