<?php
    include "../conecta.inc.php";
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    if(!isset($_POST['ativo'])){
        $ativo = 0;
    }
    else{
        $ativo = $_POST['ativo'];
    }

    $sql = "INSERT INTO admin (nome, login, senha, ativo) VALUES 
    ('$nome', '$login', '$senha', '$ativo')";


    $insert = mysqli_query($conexao, $sql);

    if(!$insert){ ?>
        <div class="row" style="background-color: rgb(245, 245, 245);">
            <div class="container px-5 py-5">
                <h3 class="text-center">Ocorreu um erro ao cadastrar no banco de dados</h3>
                <a class="row d-flex justify-content-center" href='?pg=cadastrar_usuario'>Tente Novamente</a>
            </div>
        </div>
    <?php }else{ ?>
        <div class="row" style="background-color: rgb(245, 245, 245);">
            <div class="container px-5 py-5">
                <h3 class="text-center">Usuário cadastrado com sucesso!</h3>
                <a class="row d-flex justify-content-center" href='?pg=cadastrar_usuario'>Cadastrar novo Usuário</a>
                <a class="row d-flex justify-content-center" href='?pg=listar_usuarios'>Listar Usuários</a>
            </div>
        </div>
    <?php }
?>