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
    <h2>Perfil</h2>
    <form action="./pageInicial.html" method="get">
      <table class='tabela'>
        <tr>
    
            <td>Nome</td>
            <td>E-mail</td>
            <td> - </td>
            <td> - </td>
        </tr>

        <?php
            $conn = mysqli_connect("localhost","root", "", "atp_2");

            if($conn == false){
              die('Erro: Não consegui conectar no MySQL.' . mysqli_connect_error());
            }
            
            $sql = 'SELECT id, nome, email FROM cadastro';
            
            //Envia o código SQL para o MySQL
            $res = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($res)){
            
              echo"<tr>
            
                <td>".$row['nome']."</td>
                <td>".$row['email']."</td>
                <td><a href='cadastro.php?id=".$row['id']."'>Editar</a></td>
                <td><a href='excluir.php?id=".$row['id']."'>Excluir</a></td>
              </tr>";

            };
        
        ?>
      </table>

    </form>
    <a href="pageInicial.php"><input type="submit" value="Voltar" name="voltar" class="voltar"></a>
  </main>
		
</body>
</html>