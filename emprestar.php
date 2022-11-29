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
    <link rel="stylesheet" href="./css/emprestar.css">
    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    </link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="nome_proj">
            <img src="./img/logooi.png" alt="Logo Coisas Emprestadas" id="logo_img">
            <h1>Coisas Emprestadas</h1> 
        </div>
    </header>

    <main class="main">
        <h1>Emprestar</h1>
        <div class="principal">
            <!--PRECISA SER LEVADO PARA OUTRA PÁGINA-->
            <form action="banco_de_dados_empret.php" method="post" class="form">

                <!--<input type="hidden" name="id" value= "<?php echo $id; ?>" class="caixa_entrada">-->
                <h2>Nome do item:</h2>
                <input type="text" name="nome_emprest" class="input" required >

                <h2>Categoria</h2>
                <select name="categoria_emprest" id="categoria" required>
                    <option value="saude">Saúde</option>
                    <option value="objeto">Objetos de casa</option>
                    <option value="roupas" >Roupas</option>
                    <option value="eletronico">Eletronicos</option>
                    <option value="mecanico">Mecânicos</option>
                    <option value="nd">Nenhum descrito</option>
                </select>
            
                <h2>Até quando deseja ficar:</h2>
                <input type="date" name="data_emprest" class="input"  required min="18-11-2022">

                <h2>Observações:</h2>
                <textarea name="aerea_emprest" id="aerea"  cols="30" rows="10" placeholder='Digite algo...' value="<?php echo $aerea_emprest; ?>"></textarea>

                <input type="submit" value="Finalizar" class="emprestar">
            </form>
            <a href="pageInicial.php"><input type="submit" value="Voltar" class="voltar"></a>
        </div>
    </main>
</body>
</html>