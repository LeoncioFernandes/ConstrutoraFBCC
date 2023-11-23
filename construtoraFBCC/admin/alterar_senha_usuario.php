<?php  
    include "../conecta.inc.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM admin WHERE id = $id";
    $busca = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($busca)){      
?>
<div class="row">
    <div class="col-2"></div>
    
    <div class="col">

        <div class="py-5">
            <h2 class="text-center">Alterar senha do Usuário</h2>
            <h4 class="text-center"><?=$dados['nome'];?></h4>
            <form method="post" action="?pg=alterardb_senha_usuario" class="was-validated">
                <input type="hidden" name="id" value="<?=$dados['id'];?>">
                <div class="form-floating mb-3 mt-3">
                    <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
                    <label for="senha">Nova Senha</label>
                    <div class="invalid-feedback">Preenchimento obrigatório</div>
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