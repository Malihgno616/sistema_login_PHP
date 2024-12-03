<?php 

defined('CONTROL') or die('Acesso negado!');

// efetuar logout - destrói todas as variáveis armazenadas no site
session_destroy();

//volta para a página inicial
header('location: index.php?route=login');

