<div class="container-fluid sticky-top">
    <div class="row">
        <nav class="navbar navbar-expand-sm bg-secondary p-3 navbar-dark">
            <div class="col">
            </div> 
            <div class="col-6">
                <ul class="navbar-nav justify-content-md-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="?pg=principal">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Imóveis</a>
                        <ul class="dropdown-menu">
                            <?php
                                $sql = mysqli_query($conexao,"SELECT nome,link FROM paginas WHERE tag = 'imovel' AND visivel_menu = 1 ORDER BY id");
                                while($tabela = mysqli_fetch_array($sql)){
                            ?>
                            <li><a class="dropdown-item" href="?pg=<?=$tabela['link'];?>"><?=$tabela['nome'];?></a></li>
                            <?php } ?>
                        </ul>
                    </li>

                    <?php
                        $sql = mysqli_query($conexao,"SELECT nome,link FROM paginas WHERE tag != 'imovel' AND visivel_menu = 1 ORDER BY id");
                        while($tabela = mysqli_fetch_array($sql)){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=<?=$tabela['link'];?>"><?=$tabela['nome'];?></a>
                    </li>
                    <?php } ?>

                </ul>
            </div>
            <div class="col">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="?pg=areacliente">Área do Cliente</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="?pg=areacorretor">Área do Corretor</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
</div>    