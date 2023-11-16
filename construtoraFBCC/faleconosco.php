
<div class="container px-5 py-5 w-25">
    <h2 class="text-center">FALE CONOSCO</h2> 
    <form method="post" action="?pg=contatodb" class="was-validated">
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" name="nome" required>
            <label for="nome">Nome</label>
            <div class="invalid-feedback">Preenchimento obrigatório</div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="email" placeholder="Digite seu E-mail" name="email" required>
            <label for="email">Email</label>
            <div class="invalid-feedback">Preenchimento obrigatório</div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="telefone" placeholder="Digite seu telefone" name="telefone" required>
            <label for="telefone">Telefone</label>
            <div class="invalid-feedback">Preenchimento obrigatório</div>
        </div>
        <div class="form-floating mb-3 mt-3">
            <select class="form-select" id="assunto" name="assunto" required>
                <option>Assunto1</option>
                <option>Assunto2</option>
                <option>Assunto3</option>
                <option>Assunto4</option>
            </select>
            <label for="assunto" class="form-label">Selecione um assunto:</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui:" required></textarea>
            <label for="mensagem">Mensagem</label>
            <div class="invalid-feedback">Preenchimento obrigatório</div>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
        </div>
    </form>
</div>
