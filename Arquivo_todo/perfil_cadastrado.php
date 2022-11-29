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
                    <ul class="nome">
                        <p>Nome Completo</p>
                        <input type="text" class="caixa_entrada" name="nome" required> 
                    </ul>

                    <ul class="apelido">
                        <p>Apelido</p>
                        <input type="text" class="caixa_entrada" name="apelido">
                    </ul>

                    <!--Menor de 18, não pode-->
                    <ul class="data">
                        <p>Data de Nascimento</p>
                        <input type="date" class="caixa_entrada" name="dsnasci" required max="2004-12-31"> 
                    </ul>

                    <ul class="email">
                        <p>E-mail</p>
                        <input type="email" class="caixa_entrada" name="email" required>
                    </ul>
                    <ul class="sexo">
                        <p>Sexo</p>
                        <select name="sexo" id="sexo">
                            <option value="Femino">Feminino</option>
                            <option value="Maculino">Masculino</option>
                        
                        </select>
                    </ul>


                    <ul class="senha"> 
                        <p>Senha</p>
                        <input type="password" class="caixa_entrada" name="senha_first" required>
                        <p>Senha de 8 carácteres</p>
                        
                    </ul>
                    <!--Condições para ser igual o de cima-->
                    <ul class="senha_dnv">
                        <p>Confirmar senha</p>
                        <input type="password" class="caixa_entrada" required name="senha_secund">
                
                    </ul>

                    <?php
                

                    ?>
                    
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