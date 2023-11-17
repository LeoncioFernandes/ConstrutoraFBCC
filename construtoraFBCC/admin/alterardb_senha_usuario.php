<?php
    include "../conecta.inc.php";
    
    $id = $_POST['id'];
    $senha = md5($_POST['senha']);
    
    $sql = "UPDATE admin SET senha='$senha' WHERE id=$id";

    $altera = mysqli_query($conexao, $sql);

    if(!$altera){ ?>
        <div class="container-fluid px-5 py-5 w-25">
            <h3 class="text-center">Ocorreu um erro ao atualizar os dados no banco de dados</h3>
            <a class="row d-flex justify-content-center" href='?pg=listar_usuarios'>Voltar</a>
        </div>
    <?php }else{ ?>
        <div class="container-fluid px-5 py-5 w-25">
            <h3 class="text-center">Senha do Usuário alterada com sucesso!</h3>
            <a class="row d-flex justify-content-center" href='?pg=listar_usuarios'>Voltar</a>
        </div>
    <?php }
?>