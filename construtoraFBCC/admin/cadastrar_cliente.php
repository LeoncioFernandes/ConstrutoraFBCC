<div class="row">
    <div class="col-2"></div>
    
    <div class="col">

        <div class="py-5">
            <h2 class="text-center">Cadastrar Novo Cliente</h2> 
            <form method="post" action="?pg=inserirdb_cliente" class="was-validated">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome completo" name="nome" required>
                    <label for="nome">Nome</label>
                    <div class="invalid-feedback">Preenchimento obrigatório</div>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="login" placeholder="Digite o login do usuário" name="login" required>
                    <label for="login">Login</label>
                    <div class="invalid-feedback">Preenchimento obrigatório</div>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
                    <label for="senha">Senha</label>
                    <div class="invalid-feedback">Preenchimento obrigatório</div>
                </div>
                <div class="form-check form-switch mb-3 mt-3">
                    <input class="form-check-input" type="checkbox" id="ativo" name="ativo" role="switch" value="1">
                    <label class="form-check-label text-black" for="ativo">Cliente Ativo</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
                </div>
            </form>
        </div>

    </div>

    <div class="col-2"></div>
</div>