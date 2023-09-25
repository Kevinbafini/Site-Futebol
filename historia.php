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

        h1 {
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 40px;
            line-height: 3;
        }

        h2 {
            text-align: justify;
            font-family: Arial, sans-serif;
            font-size: 20px;
            line-height: 1.5;
            
            margin-left: 25%;
            margin-right: 25%;

        }

        a {
            color: black;
        }

        img {
            line-height: 1.5;
            
        }

        footer {
            position: relative;
        }
    </style>
</head>

<body>

    <?php require "menu.php";
    require "conexao.php";
    ?>

    <aside>

        <h1>O Nascimento do Manchester City!</h1>

        <h2>
            <p>
                O Manchester City Football Club, carinhosamente conhecido como “City”, teve seu início modesto em 1880. Originalmente, foi fundado como “St. Mark’s (West Gorton)” por membros da Igreja de São Marcos, no distrito de West Gorton, Manchester. Rapidamente, o futebol se tornou uma paixão para a comunidade local, e o clube logo mudou seu nome para “Ardwick AFC”. Em 1894, a equipe adotou o nome “Manchester City” para refletir sua origem na cidade.
            </p>
        </h2>

        <h1>Os Primeiros Títulos e a Era de Ouro</h1>

        <h2>
            <p>
            O clube conquistou sua primeira conquista de destaque em 1904, quando venceu a FA Cup, um feito notável para um clube ainda jovem. No entanto, sua verdadeira era de ouro veio na década de 1960 sob a liderança do lendário técnico Joe Mercer e seu assistente Malcolm Allison. Durante esse período, o City conquistou a Liga Inglesa em 1968 e 1970, juntamente com a Taça da Liga em 1970 e a FA Cup em 1969. Essa época é carinhosamente lembrada pelos torcedores como a “Era Mercer-Allison”.
            </p>
        </h2>

       <h1>Altos e Baixos na Liga e o Declínio</h1>

       <h2>
            <p>
        Após os anos gloriosos, o Manchester City enfrentou altos e baixos na Liga, passando por várias divisões ao longo de sua história. Uma das fases mais difíceis foi em 1998, quando o clube caiu para a terceira divisão, uma experiência desafiadora para os torcedores fiéis. No entanto, sua resiliência prevaleceu, e eles rapidamente subiram de volta às divisões superiores do futebol inglês.
            </p>
       </h2>

       <h1>A Revolução Sheikh Mansour e o Sucesso Moderno</h1>

        <h2>
            <p>
            A história do Manchester City mudou dramaticamente em 2008, quando o Sheikh Mansour bin Zayed Al Nahyan, membro da família real de Abu Dhabi, adquiriu o clube. Isso desencadeou um investimento maciço em jogadores de classe mundial e infraestrutura. Sob o comando de treinadores como Roberto Mancini, Manuel Pellegrini e, mais notavelmente, Pep Guardiola, o City conquistou a Premier League em várias ocasiões desde 2012, estabelecendo-se como um dos clubes mais dominantes da Inglaterra.
            </p>
        </h2>

        <h1>Títulos Recentes e Ambições Futuras</h1>

        <h2>
            <p>
            Nos anos mais recentes, o Manchester City tem continuado a acumular troféus, incluindo títulos da Premier League, Copas da Liga e FA Cup, e a tão aclamada champions league que depois de anos o time da Inglaterra conquistou, a sua maior ambição.Seu estilo de jogo atraente, impulsionado pela filosofia de posse de bola de Pep Guardiola, tem sido uma marca registrada do sucesso do clube.

            </p>
        </h2>
    </aside>

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