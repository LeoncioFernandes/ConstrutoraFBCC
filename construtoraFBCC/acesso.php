<?php
    include_once("conecta.inc.php");

    $login_cliente = $_POST['usuario_cliente'];
    $senha_cliente = md5($_POST['senha_cliente']);

    //if (isset($entrar)) {
       $sql = "SELECT * FROM clientes WHERE login = '$login_cliente' AND senha = '$senha_cliente'" 
       or die("Não conectou.");

        $query = mysqli_query($conexao, $sql);
        //$linhas = $query-> rows;

        if (!mysqli_num_rows($query)){
        //if ($linhas == 0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='?pg=login';</script>";
            die();
        }else{
            setcookie("login_cliente",$login_cliente);
            setcookie("senha_cliente",$senha_cliente);
            header("Location: ?pg=areacliente");
        }
    //}
?>