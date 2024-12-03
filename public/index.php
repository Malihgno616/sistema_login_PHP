<?php 

// Inicia a sessão
session_start();

// Const de controle
define('CONTROL', true);

// verifica se existe um usuário logado
$logged_user = $_SESSION['user'] ?? null;

// Verifica qual é a rota na URL
if (empty($logged_user)) {
    $route = 'login';
} else {
    $route = $_GET['route'] ?? 'home';
}

// Se o usuário está logado, mas a rota é login, vai redirecionar para o Home
if (!empty($logged_user) && $route == 'login') {
    $route = 'home';
}

$routes = [
    'login' => 'login.php',
    'logout' => 'logout.php',
    'page1' => 'page1.php',
    'page2' => 'page2.php',
    'page3' => 'page3.php',
    'home' => 'home.php',
];

// Verifica se a rota existe
if (!array_key_exists($route, $routes)) {
    die("Acesso negado");
} 

require_once $routes[$route];
exit; // Adicione exit para evitar execução adicional