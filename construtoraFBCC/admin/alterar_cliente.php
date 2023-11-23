<?php  
    include "../conecta.inc.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM clientes WHERE id = $id";
    $busca = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($busca)){      
?>

<div class="row">
    <div class="col-2"></div>
    
    <div class="col">

        <div class="py-5">
            <h2 class="text-center">Alterar Cliente</h2> 
            <form method="post" action="?pg=alterardb_cliente" class="was-validated">
                <input type="hidden" name="id" value="<?=$dados['id'];?>">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome completo" name="nome" value="<?=$dados['nome'];?>" required>
                    <label for="nome">Nome</label>
                    <div class="invalid-feedback">Preenchimento obrigatório</div>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="login" placeholder="Digite o login do usuário" name="login" value="<?=$dados['login'];?>" required>
                    <label for="login">Login</label>
                    <div class="invalid-feedback">Preenchimento obrigatório</div>
                </div>
                <div class="form-check form-switch mb-3 mt-3">
                    <input class="form-check-input" type="checkbox" id="ativo" name="ativo" role="switch" value="1" <?php if($dados['ativo'] == 1){echo "checked";}?>>
                    <label class="form-check-label text-black" for="ativo">Usuário Ativo</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
                </div>
            </form>
        </div>

    </div>

    <div class="col-2"></div>
</div>

<?php 
}
?>