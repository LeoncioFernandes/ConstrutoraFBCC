<div class="mx-auto py-5 text-center" style="width:1000px">

    <?php
        $sql = mysqli_query($conexao,"SELECT conteudo FROM paginas WHERE id = 7");
        while($tabela = mysqli_fetch_array($sql)){
    ?>
    <?=$tabela['conteudo'];?>
    <?php } ?>
    
</div>