<?php
    if (!empty($_POST)){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        if (empty($nome) or empty($email) or empty($telefone) or empty($assunto) or empty($mensagem)){
            $query = false;
        }
        else{
            $dados = "INSERT INTO faleconosco (nome, email,telefone,assunto,mensagem) VALUES ('$nome','$email','$telefone','$assunto','$mensagem')";
            $query = mysqli_query($conexao,$dados);
        }
    }
    else{
        $query = false;
    }
?>

<?php if($query){ ?>
    <div class="container px-5 pt-5">
        <h3 class="text-center">Obrigado pelo contato.</h3>
    </div>
    <div class="container px-5 pb-5">
        <h4 class="text-center">Dados enviados com sucessso!</h4>   
    </div>
<?php }else{ ?>
    <div class="container px-5 pt-5">
        <h4 class="text-center">Não foi possível enviar o e-mail.</h4>
    </div>
    <div class="container px-5 pb-5 d-grid">
        <a class="btn btn-secondary" href="index.php?pg=faleconosco">Tente novamente.</a>
    </div>
<?php } ?>
