<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 8 - Exercise 1</title>
    <style>
        .main-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .teste1 {
            color: red;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);
            $confirm_password = htmlspecialchars($_POST["confirm-password"]);

            if ($password === $confirm_password) {
                echo "<h1>A senha é: " . $password . "</h1>";
            } else {
                echo "<h1>Erro: As senhas não coincidem.</h1>";
            }
        } else {
            echo "<h1>Erro: Método de solicitação inválido.</h1>";
        }
        ?>
    </div>
</body>
</html>
