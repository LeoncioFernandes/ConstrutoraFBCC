<div class="container-fluid p-4 bg-primary text-white text-center">
    <a href="index.php">
        <img src="../imagens/01_LOGO_FBCC.png" class="rounded" alt="Construtora FBCC" width="304">
    </a>
</div>

<?php 
    if(isset($_COOKIE['login']) and isset($_COOKIE['senha'])){
        include_once('menu_admin.php');
    }
?>