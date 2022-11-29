
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
                <a href="perfil.php"><img src="./img/perfil.png" alt="Perfil" id="perfil_principal"></a>
                <a href="tabela_itens.php"><img src="./img/lista-de-reproducao.png" alt="Adicionar novo item" id="mais_principal"></a>
                <a href="logout.php"><img src="./img/sair.png" alt="Icon de sair" id="sair_principal"></a>
            </div>
            
        </div> 
    </header>
    <main class="lista_itens">
    
        <section class="itens">
        
            <div class="itens_emprestados">
                <div class="emprestados">
                    <img src="./img/sofa.jpg" alt="Sofá" id="img_principal">
                    <div class="emprestados_text">
                        <h3 class="itens_titulo">Sofá</h3>
                        <div class="button_itens">
                            <a href="emprestar.php"><input type="submit" value="Emprestar" class="emprestar"></a>
                        </div>
                     
                    </div> 
                </div>
                <div class="emprestados">
                    <img src="./img/headphone.jpg" alt="produtos eletronicos" id="img_principal">

                    <div class="emprestados_text">
                        <h3 class="itens_titulo">Headphone</h3>
                        <div class="button_itens">
                            <a href="emprestar.php"><input type="submit" value="Emprestar" class="emprestar"></a>
                        </div>
                    </div>
                </div>
                <div class="emprestados">
                    <img src="./img/Tenis_NIKE.jpg" alt="Tenis" id="img_principal">
                    <div class="emprestados_text">
                        <h3 class="itens_titulo">Tênis</h3>
                        <div class="button_itens">
                            <a href="emprestar.php"><input type="submit" value="Emprestar" class="emprestar"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="emprestados">
                    <img src="./img/bike.jpg" alt="Bicicleta" id="img_principal">
                    <div class="emprestados_text">
                        <h3 class="itens_titulo">Bike</h3>
                        <div class="button_itens">
                        <a href="emprestar.php"><input type="submit" value="Emprestar" class="emprestar"></a>
                        </div>
                    </div>
                </div>
                <div class="emprestados">
                    <img src="./img/raque.jpg" alt="Raque de mandeira" id="img_principal">
                    <div class="emprestados_text">
                        <h3 class="itens_titulo">Rack</h3>
                        <div class="button_itens">
                            <a href="emprestar.php"><input type="submit" value="Emprestar" class="emprestar"></a>
                        </div>
                        
                    </div>
                </div>
                <div class="emprestados">
                    <img src="./img/mini_fone.jpg" alt="Celular" id="img_principal">
                    <div class="emprestados_text">
                        <h3 class="itens_titulo">Fone de ouvido</h3>
                        <div class="button_itens">
                            <a href="emprestar.php"><input type="submit" value="Emprestar" class="emprestar"></a>
                        </div>                     
                    </div>
                </div>

                <div class="emprestados">
                    <img src="./img/roupas.jpg" alt="Poltrona Cinza" id="img_principal">
                    <div class="emprestados_text">
                        <h3 class="itens_titulo">Agasalhos</h3>
                        <div class="button_itens">
                            <a href="emprestar.php"><input type="submit" value="Emprestar" class="emprestar"></a>
                        </div>                     
                    </div>
                </div>
                
                <div class="emprestados">
                    <img src="./img/eletrodomesticos.jpg" alt="Eletrodomesticos" id="img_principal">
                    <div class="emprestados_text">
                        <h3 class="itens_titulo">Eletrodomesticos</h3>
                        <div class="button_itens">
                            <a href="emprestar.php"><input type="submit" value="Emprestar" class="emprestar"></a>
                        
                        </div>                     
                    </div>
                </div>
                <div class="emprestados">
                    <img src="./img/coturno.jpg" alt="Coturno marrom claro masculino" id="img_principal">
                    <div class="emprestados_text">
                        <h3 class="itens_titulo">Coturno</h3>
                        <div class="button_itens">
                            <a href="emprestar.php"><input type="submit" value="Emprestar" class="emprestar"></a>
                        </div>                     
                    </div>
                </div>
            
            <div>
        </section>
        
    </main>
    <footer>
        <p >Develope by <a class="developed" href="https://github.com/Melo-Luisa">Luisa Melo</a></p><br>
        <p>&copy;Copyright 2022</p>
    </footer>
</body>
</html>