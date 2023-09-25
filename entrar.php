<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela entrar</title>
    <link rel="stylesheet" href="estilos_menu.css">
    <link rel="stylesheet" href="rodape.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        h3 {
            text-align: center;
            margin-top: 30px;
            color: #f8f8f8;
        }

        h2 {
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 26px;
            line-height: 4.5;   
            color: #f8f8f8;
            text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}

        form {
            max-width: 375px;
            margin: 0 auto;
            background-color: #fff;
            padding: 16px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        input[type="password"],
        input[type="submit"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            background-color: #f8f8f8;
            color: #333;
            font-size: 14px;
            margin-bottom: 18px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 22px;
            top: 60%;
            transform: translate(0, -50%);
            cursor: pointer;
        }

        .show-password-icon {
            width: 20px;
            height: 20px;
        }

        body {
    background-image: url("Imagens/placd.jpeg");
    background-size: cover;
    background-position: 0px -180px;
    background-repeat: no-repeat;
  }
    </style>
</head>

<body>
    <?php require "menu.php";
        require "conexao.php";
    ?>
    <h2>ENTRAR</h2>
    


    <div id="div">
        <form name="clientes" method="post" action="">
            <p>
                <label for="email">E-mail:</label>
                <input type="text" name="email" required>
            </p>
            <p class="password-container">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
                <span class="toggle-password" onclick="togglePasswordVisibility()">
                    <img src="imagens/eye-icon.png" alt="Mostrar Senha" class="show-password-icon">
                </span>
            </p>
            <p>
                <input id="botao" type="submit" name="entrar" value="Entrar">
            </p>
                     
            <html>

<head>
    <title>Login com o Google</title>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="SEU_ID_DO_CLIENTE.apps.googleusercontent.com">
</head>

<body>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <script>
        function onSignIn(googleUser) {
            var id_token = googleUser.getAuthResponse().id_token;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'login.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.responseText === "success") {
                    window.location.href = "pagina_de_sucesso.php";
                }
            };
            xhr.send('idtoken=' + id_token);
        }
    </script>
</body>

</html>
<p>

<head>
</head>
<body>
Não tem uma conta? 
  <a href="cadastrar.php">Cadastrar</a>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["idtoken"])) 
    $google_client_id = 'SEU_ID_DO_CLIENTE';
    $google_client_secret = 'SUA_CHAVE_SECRETA';       
?>




        </form>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementsByName("senha")[0];
            var showPasswordIcon = document.querySelector(".show-password-icon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showPasswordIcon.src = "imagens/eye-off-icon.png";
            } else {
                passwordInput.type = "password";
                showPasswordIcon.src = "imagens/eye-icon.png";
            }
        }
    </script>

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

    <?php
        if (isset($_POST["entrar"]))
        {
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            require "conexao.php";
            $sql="INSERT INTO tbcadastrar (email, senha)";
            $sql.=" VALUES ('$email', '$senha')";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<p>Login com sucesso!</p>";
            header("Location: entrar.php");
        }
    ?>
</body>
</html>
