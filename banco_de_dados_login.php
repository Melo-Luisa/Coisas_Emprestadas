<?php
//AINDA NÃO BUSCA OS DADOS DO BANCO DE DADOS EM CADASTRO!!
    $conn = mysqli_connect("localhost","root", "", "atp_2");

    if($conn == false){
        die('Erro: Não consegui conectar no MySQL.' . mysqli_connect_error());
    }

    $id = $_POST['id'];
    $email = $_POST['email'];
    $senha_first = $_POST['senha_first'];
    
    //Monta o SQL para inserir os dados do formulario do MySQL
    $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha_first = '$senha_first'";

    //Envia o código SQL para o MySQL
    $res = mysqli_query($conn, $sql);
    //OBTEM QUANTIDADE DE REGISTRO ENCONTRADOS
    $qtdeRegistros = mysqli_num_rows($res);

    //ENCONTROU LOGIN E SENHA COMPATIVEL
    if($qtdeRegistros > 0){
        //VERIFICAR SE JÁ FOI ACESSADO
        session_start();

        $row = mysqli_fetch_assoc($res);

        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];



        header("Location: pageInicial.php");
    }
    else{
        header("Location: login.php?erro=1");
    }

    
?>