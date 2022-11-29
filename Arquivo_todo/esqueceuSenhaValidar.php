<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas Emprestadas</title>
    <!--LINKS-->
    <link rel="icon" href="./img/logooi.png">
    <link rel="stylesheet" href="./css/style_segundo.css">
    <link rel="stylesheet" href="./css/rodape.css">
    <link rel="stylesheet" href="./css/esqueceuSenha.css">
    <!--FONTE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    </link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Logo">
        <img src="./img/logooi.png" alt="Logo da Coisas Emprestadas" id="logo_coisas">
        <h1>Coisas Emprestdas</h1>
       
    </div>
    <form action="validarCodigo.php" method="post">
        <div class="principal">
            <div class="sub_principal">
                <h1 class="texto_principal">Esqueceu a senha?</h1>
                <p class="texto">Para verificar a sua conta, favor informe o seu email:</p>
                <input type="email" name="email" class="email" required>
            </div>
            <div class="botao_validar">
                <a href="validarCodigo.php"><input type="submit" value="validar" class="validar" ></a>
            </div> 
        </div>
    </form>
   
  

</body>
<footer>
    <footer class="rodape">
        <a href="https://github.com/Melo-Luisa" class="dev"><p>Developed by Luisa Melo</p></a>
        <p>&copy;Copyright 2022</p>
    </footer>
</footer>
</html>