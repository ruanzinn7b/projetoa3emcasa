<?php
include("conexao.php");
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$insert = "INSERT INTO login (nome, login, senha)
VALUES ('$nome', '$login', '$senha')";

$query = mysqli_query($conexao, $insert);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Realizado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://a-static.besthdwallpaper.com/demon-slayer-kimetsu-no-yaiba-tanjiro-zenitsu-and-inosuke-wallpaper-1920x1080-92486_48.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding-top: 100px;
        }

        h2 {
            color: cyan;
        }

        a {
            color: cyan;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2 style="color: cyan;">Cadastro Realizado com sucesso</h2>
    <a href="index.php" style="color: cyan;">Voltar</a>
</body>
</html>
