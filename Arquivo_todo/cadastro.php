<?php
//PARA EDITAR


    $conn = mysqli_connect("localhost","root", "", "atp_2");

    if($conn == false){
        die('Erro: Não consegui conectar no MySQL.' . mysqli_connect_error());
    }

    $id = "";
    $nome = "";
    $apelido = "";
    $dsnasci = "";
    $email = "";
    $sexo = ""; 
    $senha_first = "";
    $senha_secund = "";

    //SE FOI ENVIADO VIA GET
    if(isset($_GET['id'])){
        //OBTEM VALOR ENVIADO VIA GET
        $id = $_GET['id'];

        // * = todas as colunas
        $sql = "SELECT * FROM cadastro WHERE id = $id";
        //ENVIA A CONSULTA PARA OBTER DADOS ATUAIS
        $res = mysqli_query($conn, $sql);
        //Armazena dados obtidos
        $row = mysqli_fetch_assoc($res);

        $nome = $row['nome'];
        $apelido = $row['apelido'];
        $dsnasci = $row['dsnasci'];
        $email = $row['email'];
        $sexo = $row['sexo'];
        $senha_first = $row['senha_first'];
        $senha_secund = $row['senha_secund'];
    }
   


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/logooi.png">
    <!--Restante-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/rodape.css">
</head>
<body>
    <header class="conteiner">
        <div class="titulo">
            <h2>Cadastro - Usuário Novo</h2>
        </div>
        <div class="logo">
            <img src="./img/logooi.png" alt="Logo Coisa Emprestadas" class="logo_img">
            <h2>Coisas Emprestadas</h2>
           
        </div>
    </header>
    <main>
        <div class="cadastro">
            <div class="itens_cadastro">
            
                <form action="banco_de_dados.php" method="post">

                    <input type="hidden" name="id" value= "<?php echo $id; ?>" class="caixa_entrada">

                    <ul class="nome">
                        <p>Nome Completo</p>
                        <input type="text" class="caixa_entrada" name="nome" required value="<?php echo $nome; ?>">  
                    </ul>

                    <ul class="apelido">
                        <p>Apelido</p>
                        <input type="text" class="caixa_entrada" name="apelido" value="<?php echo $apelido; ?>">
                    </ul>

                    <!--Menor de 18, não pode-->
                    <ul class="data">
                        <p>Data de Nascimento</p>
                        <input type="date" class="caixa_entrada" name="dsnasci" required max="2004-12-31" value="<?php echo $dsnasci; ?>"> 
                    </ul>

                    <ul class="email">
                        <p>E-mail</p>
                        <input type="email" class="caixa_entrada" name="email" required value="<?php echo $email; ?>">
                    </ul>
                    <ul class="sexo">
                        <p>Sexo</p>
                        <select name="sexo" id="sexo" >
                            <option value="Femino" <?php if($sexo =='Feminino') {echo"selected";} ?>>Feminino</option>
                            <option value="Maculino" <?php if($sexo =='Masculino') {echo"selected";} ?>>Masculino</option>
                        
                        </select>
                    </ul>

                    <ul class="senha"> 
                        <p>Senha</p>
                        <input type="password" class="caixa_entrada" name="senha_first" required value="<?php echo $senha_first; ?>">
                        <p>Senha de 8 carácteres</p>
                        
                    </ul>
                    <!--Condições para ser igual o de cima-->
                    <ul class="senha_dnv">
                        <p>Confirmar senha</p>
                        <input type="password" class="caixa_entrada" required name="senha_secund" value="<?php echo $senha_secund; ?>">
                
                    </ul>
                    
                    <ul class="botao_finalizar">
                        <a href="pageInicial.php"><input type="submit" value="Finalizar" class="botao" name="botao_finalizar"></a>
                    </ul>


                </form>
               
            </div>
            
        </div>
    </main>
    <footer class="rodape">
        <a href="https://github.com/Melo-Luisa" class="dev"><p>Developed by Luisa Melo</p></a>
        <p>&copy;Copyright 2022</p>
    </footer>
    
</body>
</html>