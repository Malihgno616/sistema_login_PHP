<?php 
// login.php

// Inicia a sessão se ainda não estiver ativa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

defined('CONTROL') or die('Acesso negado!');

// Verificar se o form foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $erro = null;

    if (empty($usuario) || empty($senha)) {
        $erro = 'Preencha todos os campos!';
    }

    if (empty($erro)) {
        $usuarios = require_once __DIR__ . '/../inc/user.php';
        foreach ($usuarios as $user) {
            if ($user['user'] == $usuario && password_verify($senha, $user['password'])) {
                // efetua o login
                $_SESSION['user'] = $user['user'];

                // Voltar à página inicial
                header('Location: index.php?route=home');
                exit;
            } 
        }
        // login inválido
        $erro = 'Login inválido!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        form {
            width: 300px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0
            , 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        h3 {
            text-align: center;
        }

        input {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
        }
        button[type="submit"] {
            width: 100%;
            height: 40px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: all .5s ease;
        }
        button[type="submit"]:hover {
            background-color: #3e8e41;

        }
    </style>
</head>
<body>
  
    <form action="index.php?route=login" method="post">
        <h3>Login</h3>
        <input type="text" name="usuario" placeholder="Usuario" id="usuario" required>
        <input type="password" name="senha" placeholder="Senha" id="senha" required>
        <button type="submit">Entrar</button>
    </form>

    <?php if (!empty($erro)) : ?>
        <p style="color: red;"><?= $erro ?></p>
    <?php endif; ?>

</body>
</html>