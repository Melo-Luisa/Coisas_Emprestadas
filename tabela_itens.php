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
    <link rel="stylesheet" href="./css/tabelas_itens.css">
    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    </link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/logooi.png">
</head>
<body>
    <header class="topo">
        <div class="nome">
            <div class="nome_proj">
                <img src="./img/logooi.png" alt="Logo Coisas Emprestadas" id="logo_img">
                <h1>Coisas Emprestadas</h1> 
            </div>
        

            <div class="itens_acesso_principal">
                <a href="logout.php"><img src="./img/sair.png" alt="Icon de sair" id="sair_principal"></a>
            </div>
            
        </div> 
    </header>
    <main class="lista_itens">

    <h2>Lista dos Itens</h2>
        <article>
            <table class='tabela'>
                <!--linha-->
                <tr>
                    <!--colunas-->
                    <td>Id</td>
                    <td>Produto</td>
                    <td>Data de Emprestimo</td>
                    <td>Devolver</td>
                </tr>
            
            </table>

            <?php
                $conn = mysqli_connect("localhost","root", "", "atp_2");

                if($conn == false){
                    die('Erro: Não consegui conectar no MySQL.' . mysqli_connect_error());
                }
                
                $sql = 'SELECT id, nome_emprest, data_emprest FROM emprest';
                
                //Envia o código SQL para o MySQL
                $res = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($res)){
                
                    echo"<table class='tabela'>
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['nome_emprest']."</td>
                            <td>".$row['data_emprest']."</td>
                            <td><a href='devolver.php?id=".$row['id']."'>Devolver</a></td>
                        </tr>
                    </table>";
                   

                };
        
             ?>

        </article>
        <ul class="botao_finalizar">
            <a href="pageInicial.php"><input type="submit" value="Voltar" class="botao" name="botao_finalizar"></a>
         </ul> <link rel="stylesheet" href="./css/cadastro.css">
    
        
    </main>
    <footer>
        <p >Develope by <a class="developed" href="https://github.com/Melo-Luisa">Luisa Melo</a></p><br>
        <p>&copy;Copyright 2022</p>
    </footer>
</body>
</html> 

<!--<td><a href='devolver.php?id=".$row['id']."''>Excluir</a></td>-->