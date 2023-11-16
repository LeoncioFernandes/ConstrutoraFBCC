<?php  
    include "../conecta.inc.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM paginas WHERE id = $id";
    $busca = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($busca)){      
?>

<div class="container px-5 py-5 w-50">
    <h2 class="text-center">Alterar Página</h2> 
    <form method="post" action="?pg=alterardb_pagina" class="was-validated">
        <input type="hidden" name="id" value="<?=$dados['id'];?>">    
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="nome" placeholder="Digite da Página" name="nome" value="<?=$dados['nome'];?>" required>
            <label for="nome">Nome</label>
            <div class="invalid-feedback">Preenchimento obrigatório</div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="link" placeholder="Digite o link da página" name="link" value="<?=$dados['link'];?>" required>
            <label for="link">Link</label>
            <div class="invalid-feedback">Preenchimento obrigatório</div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <select class="form-select" id="tag" name="tag">
                <option <?php if($dados['tag'] == ""){echo "selected";}?>></option>
                <option <?php if($dados['tag'] == "imovel"){echo "selected";}?>>imovel</option>
            </select>
            <label for="tag" class="form-label">Selecione uma Tag (Deixe vazia se não for uma página de Imóvel):</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <textarea class="form-control" style="height: 300px;" id="conteudo" name="conteudo" placeholder="Digite o conteúdo da página:"><?=$dados['conteudo'];?></textarea>
            <label for="conteudo">Conteúdo</label>
            <div class="invalid-feedback">Preenchimento obrigatório</div>
        </div>
        <div class="form-check form-switch mb-3 mt-3">
            <input class="form-check-input" type="checkbox" id="visivel_menu" name="visivel_menu" role="switch" value="1" <?php if($dados['visivel_menu'] == 1){echo "checked";}?>>
            <label class="form-check-label text-black" for="visivel_menu">Página Visível no Menu</label>
        </div>
        <div class="form-check form-switch mb-3 mt-3">
            <input class="form-check-input" type="checkbox" id="visivel_rodape" name="visivel_rodape" role="switch" value="1" <?php if($dados['visivel_rodape'] == 1){echo "checked";}?>>
            <label class="form-check-label text-black" for="visivel_rodape">Página Visível no Rodapé</label>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
        </div>
    </form>
</div>

<?php 
}
?>