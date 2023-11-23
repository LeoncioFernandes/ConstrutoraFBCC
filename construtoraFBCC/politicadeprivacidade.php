<div class="row">
    <div class="col-2"></div>
    
    <div class="col">

        <div class="py-5 text-center">

            <?php
                $sql = mysqli_query($conexao,"SELECT conteudo FROM paginas WHERE id = 7");
                while($tabela = mysqli_fetch_array($sql)){
            ?>
            <?=$tabela['conteudo'];?>
            <?php } ?>
            
        </div>

    </div>
    
    <div class="col-2"></div>
</div>