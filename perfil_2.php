<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coisas Emprestadas</title>
  <link rel="icon" href="./img/logooi.png">
  <!--LINKS-->
  <link rel="stylesheet" href="./css/style_segundo.css">
  <link rel="stylesheet" href="./css/pageIncial.css">
  <link rel="stylesheet" href="./css/perfil.css">
  <link rel="stylesheet" href="./css/tabelas_itens.css">
  <!--Fonte-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  </link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
  <link rel="icon" href="./img/logooi.png">
</head>
<body>
  <header>
    <div class="nome">
      <div class="nome_proj">
        <img src="./img/logooi.png" alt="Logo Coisas Emprestadas" id="logo_img">
        <h1>Coisas Emprestadas</h1> 
      </div>
      <a href="incial.php"><img src="./img/sair.png" alt="Icon de sair" id="sair_principal"></a>
    </div>
  </header>
  <main class="principal">
    <h1 class="nome_perfil_sub">Perfil</h1>
    <form action="./pageInicial.html" method="get">
        <form action="./pageInicial.html" method="get">
            <h2>Nome:</h2>
            <input type="text" name="nome" class="input" >

            <h2>Data de Nascimento</h2>
            <input type="date" name="dsnasci" class="input" >

            <h2>E-mail:</h2>
            <input type="email" name="email_perfil" class="input" >

            <h2>Senha</h2>
            <input type="password" class="input" name="senha_first" >
        
            <a href="./pageInicial.html"><input type="submit" value="Salvar" name="salvar" class="salvar"></a>

        <?php
            $conn = mysqli_connect("localhost","root", "", "atp_2");

            if($conn == false){
              die('Erro: Não consegui conectar no MySQL.' . mysqli_connect_error());
            }
            
            $sql = 'SELECT id, nome, email, dsnasci, senha_first FROM cadastro';
            
            //Envia o código SQL para o MySQL
            $res = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($res)){
            
              echo"<tr>
            
                <input >".$row['nome']."</input>
                <td>".$row['email']."</td>
              </tr>";

            };
        
        ?>
   

    </form>
    <a href="pageInicial.php"><input type="submit" value="Voltar" name="voltar" class="voltar"></a>
  </main>
		
</body>
</html>