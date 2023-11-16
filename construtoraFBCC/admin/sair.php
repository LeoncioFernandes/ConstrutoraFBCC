<?php
        setcookie("login","", time()-3600);
        setcookie("senha","", time()-3600);
       
        echo"<script language='javascript' type='text/javascript'>
            alert('Saiu da ÁREA RESTRITA');window.location
            .href='login.php';</script>";
            die();

        exit();
 ?>