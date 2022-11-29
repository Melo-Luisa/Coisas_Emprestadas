<?php
//FUNCIONA - NÃO MEXER - LEMBRAR QUE ESTÁ NO ATP_2
//enviar dados

    $conn = mysqli_connect("localhost","root", "", "atp_2");

    if($conn == false){
        die('Erro: Não consegui conectar no MySQL.' . mysqli_connect_error());
    }

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $dsnasci = $_POST['dsnasci'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $senha_first = $_POST['senha_first'];
    $senha_secund = $_POST['senha_secund']; 


    if (empty($id)){
            //Monta o SQL para inserir os dados do formulario do MySQL
        $sql = "INSERT INTO cadastro (nome, apelido, dsnasci, email, sexo, senha_first, senha_secund)
                    VALUES ('$nome', '$apelido', '$dtnasci', '$email', '$sexo',
                    '$senha_first', '$senha_secund')";

        //Envia o código SQL para o MySQL
        $res = mysqli_query($conn, $sql);

        if($res){
            //Redirecionar o usuário
            header("Location: pageInicial.php");
        }
        else{
            echo "FALHA AO IMPORTAR DOCUMENTOS!";
        }
        
    }
    //EDITAR DOCUMENTOS
    else{
        $sql =  " UPDATE cadastro SET 
                        nome = '$nome',
                        apelido = '$apelido',
                        dsnasci = '$dsnasci',
                        email = '$email',
                        sexo = '$sexo',
                        senha_first = '$senha_first',
                        senha_secund = '$senha_secund'
                    WHERE 
                        id = $id";        

        //Envia o código SQL para o MySQL
        $res = mysqli_query($conn, $sql);

        if($res){
            //Redirecionar o usuário
            header("Location: perfil.php");
        }
        else{
            echo "FALHA AO IMPORTAR DOCUMENTOS!";
        }
    }

   
?>