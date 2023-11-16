<div class="mx-auto py-5 w-50 text-center">

    <?php
        $sql = mysqli_query($conexao,"SELECT conteudo FROM paginas WHERE id = 6");
        while($tabela = mysqli_fetch_array($sql)){
    ?>
    <?=$tabela['conteudo'];?>
    <?php } ?>
    
</div>