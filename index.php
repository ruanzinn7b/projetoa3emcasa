<?php
session_start();
?>
<html>
<head>
    <style>
        body {
            background-image: url("https://free4kwallpapers.com/uploads/originals/2020/08/02/breath-of-thunder-wallpaper.jpg");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .content {
            background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.5));
            padding: 20px;
            border: 2px solid black; 
            border-radius: 5px;
            background-color: black; 
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 28px;
        }

        a {
            color: black;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <center>
        <div class="content">
            <?php
            if (isset($_SESSION['nome'])) {
                echo "<h1 style='font-family: Arial, sans-serif;'>Olá, " . $_SESSION['nome'] . "</h1><br><br>";
                if ($_SESSION['nome'] === 'administrador') {
                    echo '<a href="cadastro.php">Cadastrar Usuário</a><br><br>';
                    echo '<a href="usuarios.php">Listar Usuários</a><br><br>';
                }
                echo '<a href="alterarsenha.php">Alterar Senha</a><br>';
                echo '<a href="logout.php">Sair</a><br>';
            } else {
                echo 'Olá, visitante. <a href="login.php">Login</a>';
            }
            ?>
        </div>
    </center>
</body>
</html>
