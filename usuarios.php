<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit();
}
if ($_SESSION['nome'] !== 'administrador') {
    echo "Você não tem permissão para acessar esta página.";
    exit();
}
?>
<html>
<head>
    <style>
        body {
            background-image: url('https://a-static.besthdwallpaper.com/demon-slayer-giyu-tomioka-wallpaper-1920x1080-83233_48.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        center {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.5));
            padding: 20px;
            border-radius: 5px;
            color: white;
        }

        h1 {
            margin-bottom: 20px;
            color: white;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
            color: cyan;
        }

        a {
            text-decoration: none;
            color: cyan;
        }
    </style>
</head>
<body>
    <center>
        <?php
        echo "<h1>Lista de Usuários Cadastrados</h1>";
        echo "<ul>";
        
        include('conexao.php');

        $query = "SELECT nome FROM login";
        $resultado = mysqli_query($conexao, $query);
        if ($resultado) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<li>" . $row['nome'] . "</li>";
            }
        } else {
            echo "Erro ao recuperar os usuários cadastrados.";
        }

        mysqli_close($conexao);

        echo "</ul>";
        ?>
        <br>
        <a href="index.php">Voltar</a>
    </center>
</body>
</html>
