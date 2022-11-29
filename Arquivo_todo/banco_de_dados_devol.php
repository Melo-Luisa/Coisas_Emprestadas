<?php

    $conn = mysqli_connect("localhost","root", "", "atp");

    if($conn == false){
        die('Erro: Não consegui conectar no MySQL.' . mysqli_connect_error());
    }

    //$id = $_POST['id'];
    $nome_devol = $_POST['nome_devol'];
    $data_devol = $_POST['data_devol'];
    $motivo_devol = $_POST['motivo_devol'];
    $aerea_devol = $_POST['aerea_devol']
    
    //Monta o SQL para inserir os dados do formulario do MySQL
    $sql = "INSERT INTO devolver (nome_devol, data_devol, motivo_devol, aerea_devol)
                VALUES ('$nome_devol', '$data_devol', '$motivo_devol', '$aerea_devol')";

    //Envia o código SQL para o MySQL
    $res = mysqli_query($conn, $sql);

    if($res){
        //Redirecionar o usuário
        header("Location: tabela_itens.php");
    }
    else{
        echo "FALHA AO IMPORTAR DOCUMENTOS!";
    }
    
?>