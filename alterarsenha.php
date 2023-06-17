<?php
session_start();


if (!isset($_SESSION['nome'])) {
    header("Location: login.php"); 
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $conexao = mysqli_connect('localhost', 'root', '', 'projetodemetrius','3306');

    
    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    
    $novasenha = $_POST['nova_senha'];
    $confirmarsenha = $_POST['confirmar_senha'];

    
    if ($novasenha !== $confirmarsenha) {
        die("A nova senha e a confirmação da senha não correspondem.");
    }

    
    $nomeUsuario = $_SESSION['nome']; 
    $senhaHash = $novasenha;

    $sql = "UPDATE login SET senha = '$senhaHash' WHERE nome = '$nomeUsuario'";
    if (mysqli_query($conexao, $sql)) {?>
        Senha atualizada com sucesso
        <br><br>
        <a href="login.php">Voltar para a página de login</a>
  <?php  } else {
        echo "Erro ao atualizar a senha: " . mysqli_error($conexao);
    }

    
    mysqli_close($conexao);
}
?>

<html>
<style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('https://images2.alphacoders.com/100/1007550.jpg');
        background-size: cover;
      }
      div{
        background-color: rgba(0, 0, 0,0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 110px;
        border-radius: 10px;
        color: purple;
      }
      h1 {
        color: purple;
        font-size: 24px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    label {
        font-size: 16px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: purple;
    }
    input[type="password"] {
        font-size: 14px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 5px;
    }

    input[type="submit"] {
        color: purple;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 16px;
        padding: 8px 16px;
        background-color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    </style>
<body>
<div>
   
   <h1>Alterar Senha</h1>
   <form method="POST" action="alterarsenha.php">
       <label for="nova_senha">Nova senha:</label>
       <input type="password" name="nova_senha" id="nova_senha" required>

       <label for="confirmar_senha"><br><br>
        Confirmar nova senha:</label> <input type="password" name="confirmar_senha" id="confirmar_senha" required><br><br>

       <input type="submit" value="Alterar Senha">
   </form>
    </div>
</body>
</html>
