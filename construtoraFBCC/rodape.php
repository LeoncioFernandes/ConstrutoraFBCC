<div class="container-fluid pt-5 bg-primary text-white text-center">
    2023 &copy; ConstrutoraFBCC.com - Todos os Direitos Reservados
</div>
<nav class="navbar navbar-expand-sm bg-primary pb-5 navbar-dark">
    <div class="col"></div>
        <div class="col-6">
            <ul class="navbar-nav justify-content-md-center">
                <?php
                    $sql = mysqli_query($conexao,"SELECT nome,link FROM paginas WHERE tag != 'imovel' AND visivel_rodape = 1 ORDER BY id");
                    while($tabela = mysqli_fetch_array($sql)){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="?pg=<?=$tabela['link'];?>"><?=$tabela['nome'];?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    <div class="col"></div>
</nav>
