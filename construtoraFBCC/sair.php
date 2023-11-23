<?php
        setcookie("login_cliente","", time()-3600);
        setcookie("senha_cliente","", time()-3600);
       
        echo"<script language='javascript' type='text/javascript'>
            alert('Saiu da ÁREA DO CLIENTE');window.location
            .href='?pg=login';</script>";
            die();

        exit();
 ?>