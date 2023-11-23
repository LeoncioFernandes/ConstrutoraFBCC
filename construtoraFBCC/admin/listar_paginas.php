<script language='javascript'>
    function confirmaExclusao(aURL) {
        if(confirm('Você tem certeza que deseja excluir?')) {
            location.href = aURL;
        }
    }
</script>

<?php
    include "../conecta.inc.php";

    $busca = "SELECT * FROM paginas ORDER BY id";

    $todos = mysqli_query($conexao, $busca);
?>

<div class="row">
    <div class="col-2"></div>
    
    <div class="col">

        <div class="py-5">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 50px;">Id</th>
                        <th>Nome da página</th>
                        <th style="width: 80px; text-align: center;">Alterar</th>
                        <th style="width: 80px; text-align: center;">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($dados=mysqli_fetch_array($todos)) {?>
                    <tr>
                        <td><?=$dados['id'];?></td>
                        <td><?=$dados['nome'];?></td>
                        <td style="text-align: center;"><a href="?pg=alterar_pagina&id=<?=$dados['id']; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                        <td style="text-align: center;"><a href="javascript:confirmaExclusao('?pg=excluir_pagina&id=<?=$dados['id'];?>')" class="ask"><i class="bi bi-trash3-fill"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

    <div class="col-2"></div>
</div>