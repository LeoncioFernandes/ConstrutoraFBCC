<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Cliente</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Adicione seus estilos CSS aqui */

        header {
            text-align: center;
        }

        header img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px; /* Adapte conforme necessário */
        }

        nav {
            text-align: center;
        }

        nav ul {
            padding: 0;
            list-style: none;
        }

        section {
            text-align: center;
            margin: 20px 0;
        }

        /* Estilo para remover marcadores de lista */
        section ul {
            padding: 0;
            list-style: none;
        }
    </style>
</head>
<body>

<?php
// Simulação de dados do cliente
$nomeCliente = "  ";
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
?>

<!-- Cabeçalho -->
<header>
    <h1>Bem-vindo! <?php echo $nomeCliente; ?></h1>
</header>

<!-- Status do Projeto -->
<section>
    <h2>Status do Projeto</h2>
    <div>
    <img src="foto1.png">
        <p>Progresso do Projeto: <?php echo $progressoProjeto; ?>%</p>
        <p>Etapa <?php echo $etapasConcluidas; ?> de <?php echo $etapasTotais; ?> concluída</p>
    </div>
</section>

<!-- Navegação -->
<nav>
    <h2>Navegação</h2>
    <ul>
        <li style="display: inline; margin-right: 10px;"><a href="#status-projeto">Status do Projeto</a></li>
        <li style="display: inline; margin-right: 10px;"><a href="#documentos">Documentos</a></li>
        <li style="display: inline; margin-right: 10px;"><a href="#pagamentos">Pagamentos</a></li>
        <li style="display: inline; margin-right: 10px;"><a href="#suporte">Suporte</a></li>
        <!-- Adicione mais seções conforme necessário -->
    </ul>
</nav>

<!-- Atualizações de Projeto -->
<section id="status-projeto">
    <h2>Atualizações de Projeto</h2>
    <?php foreach ($eventosRecentes as $evento) : ?>
        <?php
        // Mapeie os eventos para os links correspondentes
        $links = array(
            "Conclusão da Fundação" => "link_fundacao.html",
            "Início da Estrutura" => "link_estrutura.html",
            "Entrega de Materiais" => "link_entrega.html"
        );

        // Obtenha o link correspondente ao evento
        $link = isset($links[$evento]) ? $links[$evento] : "#";

        // Imprima o evento como um link
        ?>
        <p><a href="<?php echo $link; ?>"><?php echo $evento; ?></a></p>
    <?php endforeach; ?>
</section>

<!-- Documentos e Contratos -->
<section id="documentos">
    <h2>Documentos e Contratos</h2>
    <ul>
        <li><a href="caminho/para/contrato.pdf">Contrato</a></li>
        <li><a href="caminho/para/desenhos.pdf">Desenhos Arquitetônicos</a></li>
        <!-- Adicione mais links conforme necessário -->
    </ul>
</section>

<!-- Pagamentos e Faturas -->
<section id="pagamentos">
    <h2>Pagamentos e Faturas</h2>
    <ul>
        <li><a href="#pagamentos">Resumo de pagamentos pendentes e histórico de transações</a></li>
        <li><a href="gerar_boleto.php">Gerar Boleto em PDF</a></li>
    </ul>
</section>

<!-- Comunicação e Suporte -->
<section id="suporte" class="form-floating mb-3 mt-3">
    <h2>Comunicação e Suporte</h2>
    <div class="caixa-mensagens">
        <label for="tag" class="form-label mensagem-texto">Caixa de entrada de mensagens e informações de contato</label>
        <!-- Adicione aqui as mensagens dinâmicas ou informações de contato -->
    </div>
</section>

<style>
    /* Estilo da caixa de mensagens */
    .caixa-mensagens {
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #f8f8f8;
        border-radius: 8px; /* Adiciona bordas arredondadas */
        margin-top: 10px; /* Adiciona um espaço superior */
    }

    /* Estilo do texto dentro da caixa de mensagens */
    .mensagem-texto {
        color: #888; /* Cor de cinza claro para o texto */
    }
</style>

</body>
</html>

<!-- Adicione mais seções conforme necessário -->

<!-- Adicione JavaScript ou scripts PHP adicionais conforme necessário -->

</body>
</html>