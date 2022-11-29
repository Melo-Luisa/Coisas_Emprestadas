<?php

    $conn = mysqli_connect("localhost","root", "", "atp_2");

    if($conn == false){
        die('Erro: Não consegui conectar no MySQL.' . mysqli_connect_error());
    }

    $id = $_POST['id'];
    $nome_emprest = $_POST['nome_emprest']; 
    $data_emprest = $_POST['data_emprest'];
    $aerea_emprest = $_POST['aerea_emprest'];
   

        //Monta o SQL para inserir os dados do formulario do MySQL
    $sql = "INSERT INTO emprest (nome_emprest, data_emprest, aerea_emprest)
                VALUES ('$nome_emprest', '$data_emprest', '$aerea_emprest')";

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