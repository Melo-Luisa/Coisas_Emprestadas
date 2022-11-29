<?php
   
    //iNICIA A SESSÃO CASO NÃO ESTEJA LOGADO!
    session_start();

    if(!isset($_SESSION['id'])){

        header("Location: login.php?autentica=1")
    }


?>