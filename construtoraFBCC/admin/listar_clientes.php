<script language='javascript'>
    function confirmaExclusao(aURL) {
        if(confirm('Você tem certeza que deseja excluir?')) {
            location.href = aURL;
        }
    }
</script>

<?php
    include "../conecta.inc.php";

    $busca = "SELECT * FROM clientes ORDER BY id";

    $todos = mysqli_query($conexao, $busca);
?>

<div class="row">
    <div class="col-2"></div>
    
    <div class="col">

        <div class="py-5">
            <h4 class="text-center">Lista de Clientes</h4> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 50px;">Id</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th style="width: 80px; text-align: center;">Ativo</th>
                        <th style="width: 80px; text-align: center;">Alterar Senha</th>
                        <th style="width: 80px; text-align: center;">Alterar Dados</th>
                        <th style="width: 80px; text-align: center;">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($dados=mysqli_fetch_array($todos)) {?>
                    <tr>
                        <td><?=$dados['id'];?></td>
                        <td><?=$dados['nome'];?></td>
                        <td><?=$dados['login'];?></td>
                        <td style="text-align: center;"><?php if($dados['ativo'] == 1) {echo "Sim";} else {echo "Não";}?></td>
                        <td style="text-align: center;"><a href="?pg=alterar_senha_cliente&id=<?=$dados['id']; ?>"><i class="bi bi-key-fill"></i></a></td>
                        <td style="text-align: center;"><a href="?pg=alterar_cliente&id=<?=$dados['id']; ?>"><i class="bi bi-person-fill-gear"></i></a></td>
                        <td style="text-align: center;"><a href="javascript:confirmaExclusao('?pg=excluir_cliente&id=<?=$dados['id'];?>')" class="ask"><i class="bi bi-person-x"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

    <div class="col-2"></div>
</div>