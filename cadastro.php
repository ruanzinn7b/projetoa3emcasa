<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            background-image: url('https://wallpapercrafter.com/desktop/134024-anime-manga-anime-man-illustration-fan-art-dark-background-selective-coloring-texture-minimalism-monochrome-Japanese-Art-sword-lightning-uniform-demon-Inosuke-Hashibir.png');
            background-size: cover;
            background-position: center center;
            text-align: center;
            padding-top: 100px;
        }

        h1 {
            color: #fff;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 8px;
            margin-bottom: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        label {
            color: #fff; /* Alterado para branco */
        }

        a {
            color: #000;
        }

        a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .center-square {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            height: 300px;
            background-color: #000;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Cadastro</h1>
        <div class="center-square">
            <form id="Cadastro" action="cadastrar.php" method="POST">
                <div class="error">
                    <?php
                    if (isset($_GET['error'])) {
                        echo $_GET['error'];
                    }
                    ?>
                </div>
                <label for="nome" style="color: #fff;">Nome:</label><br>
                <input type="text" name="nome" required><br>
                <label for="login" style="color: #fff;">Login:</label><br>
                <input type="text" name="login" required><br>
                <label for="senha" style="color: #fff;">Senha:</label><br>
                <input type="password" name="senha" required><br><br>
                <input type="submit" name="cadastrar" value="Cadastrar">
                <p>
                    <a href="login.php">Voltar</a><br>
                </p>
            </form>
        </div>
    </center>
</body>
</html>
