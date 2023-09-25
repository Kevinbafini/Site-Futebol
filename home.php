<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos_menu.css">
    <link rel="stylesheet" href="rodape.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h3 {
            text-align: center;
            margin-top: 30px;
            color: #f8f8f8;
        }

        h1{
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 30px;
            line-height: 4;
        }

        img {
            text-align: center;
            width: 150px; 
            height: auto;

   
  }

  h2 {
        text-align: center;
        font-family: Arial, sans-serif;
        font-size: 30px;
        line-height: 2;


    }

    a {
  color: black;
}   



</style>
</head>
<body>

<?php require "menu.php";
        require "conexao.php";
    ?>


        <footer>
    <div class="rodape">
        <div class="colunas">
            <div class="coluna">
                <h3>Sobre</h3>
                <p>O site Várzea F.C tem como objetivo contar e informar os amantes de futebol sobre as pricipais informações do seu time do coração!
                </p>
            </div>
            
            <div class="coluna">
            <div class="direitos-autorais">
                <p>Todos os direitos reservados &copy; <?php echo date('Y'); ?></p>
            </div>
            </div>

            <div class="coluna">
                <h3>Contato</h3>
                <p>Endereço: 123 Rua Principal</p>
                <p>Telefone: (00) 123-4567</p>
                <p>Email: varzeafc@gmail.com</p>
            </div>  
        </div>
    </div>
</footer>
</body>
</html>