<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./img/logooi.png">
    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    </link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
    <!--LINKS-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/rodape.css">

</head>
<body>
    <header>
        <div class="nome">
            <img src="./img/logooi.png" alt="Logo Coisas Emprestadas" class="logo">
            <h1>Coisas Emprestadas</h1>
            <?php

                if(isset($_GET['erro'])){
                    echo'<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
                };

                if(isset($_GET['autentica'])){
                    echo'<p style="text-align:center;color:red">Não tem acesso.</p>';
                }

            ?>
        </div>
    </header>

    <body>
        <!--AJUSTAR-->
        <main class="principal">




            <form action="banco_de_dados_login.php" name="formulario" method="post">
                <div class="entrar">
                    <div class="dados">
                        <h1>Entrar</h1>
                        <p class="entrada_nome">Usuário</p>
                        <input type="email" class="input_user" required placeholder="  seuemail@dominio.com" name="email">

                        <p class="entrada_nome_senha">Senha</p>
                        <input type="password" class="input_senha" required placeholder=' Senha de 8 números' name="senha_first">

                        <a href="esqueceuSenhaValidar.php" class="senha">Esqueceu a senha?</a>
                        
                        <input type="submit" name="botao_entrar" class="botao_entrar" value="Entrar">
            
                    </div>
                </div>
            </form>


            
           

            <div class="cadastrar_midias">
                <div class="dados_2">
                    <h1 class="cadastrar">Cadastrar</h1>
                    <a href="cadastro.php"><input type="submit" value="Começar" class="botao_comeca"></a>
                    <p class="cadastrar">Ou</p>
                    <div class="midias">
                        <img src="./img/google.png" alt="Logo do Google" id="google">
                        <br>
                        <img src="./img/facebook.png" alt="Logo do Facebook" id="facebook">
                    </div>
                   
                </div>

            </div>
        </main>
        <footer class="rodape">
           <a href="https://github.com/Melo-Luisa" class="dev"> <p>Developed By Luisa Melo</p></a>
            <p>&copy;Copyright 2022</p>
        </footer>
        
    </body>
    
</body>
</html>