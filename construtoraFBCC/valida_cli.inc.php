<?php
    if(isset($_COOKIE['login_cliente'])){
        $login_cliente = $_COOKIE['login_cliente'];
    }
    if(isset($_COOKIE['senha_cliente'])){
        $senha_cliente = $_COOKIE['senha_cliente'];
    }
    if(empty($login_cliente) OR empty($senha_cliente)){
        setcookie("login_cliente");
        setcookie("senha_cliente");
        header("Location: ?pg=login");
        exit();
    }
?>