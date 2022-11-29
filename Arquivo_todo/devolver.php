<?php

    $conn = mysqli_connect("localhost","root", "", "atp_2");

    if($conn == false){
        die('Erro: Não consegui conectar no MySQL.' . mysqli_connect_error());
    }
    $id = $_GET['id'];
    
    $sql = "DELETE FROM emprest WHERE id = $id";
    $res = mysqli_query($conn, $sql);

    header("Location: tabela_itens.php")

?>