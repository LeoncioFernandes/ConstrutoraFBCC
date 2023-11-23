<?php
    include "conecta.inc.php";
    require_once "valida_cli.inc.php";
?>
<script language='javascript'>
    function confirmaSaida(aURL) {
        if(confirm('Você deseja sair da Área do Cliente?')) {
            location.href = aURL;
        }
    }
</script>
<?php


    $login = $_COOKIE['login_cliente'];
    $sql = "SELECT * FROM clientes WHERE login = '$login'";
    $busca = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($busca)){

        // Simulação de dados do cliente
        $nomeCliente = $dados['nome'];;
        $progressoProjeto = 50; // Porcentagem de conclusão do projeto

        // Simulação de dados do projeto
        $etapasConcluidas = 4;
        $etapasTotais = 7;

        // Simulação de eventos recentes
        $eventosRecentes = array(
            "Conclusão da Fundação",
            "Início da Estrutura",
            "Entrega de Materiais"
        );
    }
?>

<div class="row" style="background-color: rgb(245, 245, 245);">
    <div class="col-2"></div>

    <div class="col mb-5">

        <div class="row text-center">
            <div class="border-2 border-bottom border-secondary">
                <div class="row mt-5">
                    <div class="col-2"></div>
                    <div class="col">
                        <h2>Bem-vindo, <?= $nomeCliente; ?>!</h2>
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <a href="javascript:confirmaSaida('?pg=sair')">
                        <button type="button" class="btn btn-warning">Sair</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="mt-3 py-3 px-2 rounded shadow bg-body-tertiary text-center">
            <h5>Status do Projeto</h5>
            <div>
                <img src="imagens/foto1.png" class="w-100 img-thumbnail">
                <!-- <div class="fakeimg img-thumbnail mx-5">Fake Image</div> -->
                <h6 class="mt-3">Progresso do Projeto:</h6>
                <div class="progress mx-5" style="height:30px" role="progressbar" aria-label="Barra de Progresso" aria-valuenow="<?= $progressoProjeto;?>" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning text-bg-warning" style="width: <?= $progressoProjeto;?>%"><?= $progressoProjeto;?>%</div>
                </div>
                <h6 class="mt-2">Etapa <?= $etapasConcluidas;?> de <?= $etapasTotais;?> concluída</h6>
            </div>
        </div>
        

        <div class="row row-cols-1 row-cols-lg-2 mt-2 text-center">

            <div class="col mt-2">
                <div class="py-3 px-2 rounded shadow bg-body-tertiary h-100">
                    <h5>Atualizações de Projeto</h5>
                    <div class="list-group list-group-item-warning mx-5">
                    <?php foreach ($eventosRecentes as $evento) : ?>
                    <?php
                        // Mapeie os eventos para os links correspondentes
                        $links = array(
                            "Conclusão da Fundação" => "?pg=emconstrucao",
                            "Início da Estrutura" => "?pg=emconstrucao",
                            "Entrega de Materiais" => "?pg=emconstrucao"
                        );

                        // Obtenha o link correspondente ao evento
                        $link = isset($links[$evento]) ? $links[$evento] : "?pg=emconstrucao";

                        // Imprima o evento como um link
                    ?>
                    <a href="<?= $link; ?>" class="list-group-item list-group-item-action"><?= $evento; ?></a>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col mt-2">
                <div class="py-3 px-2 rounded shadow bg-body-tertiary h-100">
                    <h5>Documentos e Contratos</h5>
                    <div class="list-group list-group-item-warning mx-5">
                        <a href="?pg=emconstrucao" class="list-group-item list-group-item-action">Contrato</a>
                        <a href="?pg=emconstrucao" class="list-group-item list-group-item-action">Desenhos Arquitetônicos</a>
                    </div>
                </div>
            </div>

            <div class="col mt-2">
                <div class="py-3 px-2 rounded shadow bg-body-tertiary h-100">
                    <h5>Pagamentos e Faturas</h5>
                    <div class="list-group list-group-item-warning mx-5">
                        <a href="?pg=emconstrucao" class="list-group-item list-group-item-action">Resumo de pagamentos pendentes e histórico de transações</a>
                        <a href="?pg=emconstrucao" class="list-group-item list-group-item-action">Gerar Boleto em PDF</a>
                    </div>
                </div>
            </div>

            <div class="col mt-2">
                <div class="py-3 px-2 rounded shadow bg-body-tertiary h-100">
                    <h5>Comunicação e Suporte</h5>
                    <div class="list-group list-group-item-warning mx-5">
                        <a href="?pg=emconstrucao" class="list-group-item list-group-item-action">Caixa de entrada de mensagens e informações de contato</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
  
    <div class="col-2"></div>
</div>