<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body {
            background-image: url('https://wallpapers.com/images/hd/anime-art-black-and-white-demon-slayer-tanjiro-90evrdfslx5wx1op.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        #login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            padding: 30px;
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #ffffff;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        button {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        button:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }

        #entrar {
            display: block;
            margin: 0 auto;
            width: 150px;
            height: 40px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="login-container">
        <h1>LOGIN</h1>
        <form name="login" action="logado.php" method="POST">
            Login: <input type="text" name="login" required placeholder="Digite seu login">
            <br><br> Senha: <input type="password" name="senha" required placeholder="Digite sua senha">
            <br><br>
            <input type="submit" id="entrar" value="Entrar">
        </form>
    </div>

    <script>
        function getRandomColor() {
            const letters = "0123456789ABCDEF";
            let color = "#";
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        const divElement = document.querySelector("#login-container");
        divElement.style.borderColor = getRandomColor();
    </script>

</body>

</html>
