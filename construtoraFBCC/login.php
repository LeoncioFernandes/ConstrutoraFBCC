<div class="row">
    <div class="col-3"></div>
    
    <div class="col">

        <div class="container py-5">
            <h2 class="text-center">ÁREA DO CLIENTE</h2> 
            <form method="post" action="?pg=acesso" class="was-validated">
                <div class="form-floating my-3">
                    <input type="text" class="form-control" id="usuario_cliente" placeholder="Usuário" name="usuario_cliente" required>
                    <label for="usuario_cliente">Usuário</label>
                    <div class="invalid-feedback">Preenchimento obrigatório</div>
                </div>
                <div class="form-floating my">
                    <input type="password" class="form-control" id="senha_cliente" placeholder="Senha" name="senha_cliente" required>
                    <label for="senha_cliente">Senha</label>
                    <div class="invalid-feedback">Preenchimento obrigatório</div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary btn-lg">Entrar</button>
                </div>
            </form>
        </div>

    </div>
    
    <div class="col-3"></div>
</div>

