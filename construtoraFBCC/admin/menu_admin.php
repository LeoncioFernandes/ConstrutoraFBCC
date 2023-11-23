<script language='javascript'>
    function confirmaSaida(aURL) {
        if(confirm('Você deseja sair da Área Restrita?')) {
            location.href = aURL;
        }
    }
</script>

<div class="container-fluid sticky-top">
    <div class="row">
        <nav class="navbar navbar-expand-sm bg-dark p-3 navbar-dark">
            <div class="col">
                <h3 class="text-white">Painel Admin</h3>
            </div> 
            <div class="col-6">
                <ul class="navbar-nav justify-content-md-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="" role="button" data-bs-toggle="dropdown">Páginas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?pg=listar_paginas">Listar Páginas</a></li>
                            <li><a class="dropdown-item" href="?pg=cadastrar_pagina">Cadastrar Páginas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="" role="button" data-bs-toggle="dropdown">Usuários</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?pg=listar_usuarios">Listar Usuários</a></li>
                            <li><a class="dropdown-item" href="?pg=cadastrar_usuario">Cadastrar Usuários</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="" role="button" data-bs-toggle="dropdown">Clientes</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?pg=listar_clientes">Listar Clientes</a></li>
                            <li><a class="dropdown-item" href="?pg=cadastrar_cliente">Cadastrar Clientes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:confirmaSaida('sair.php')" class="ask">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>