<?php 
defined('CONTROL') or die("Acesso negado");
?>

  <hr>
  <span>Usuário: <strong><?= $_SESSION['user'] ?></strong></span>
  <span>
    <a href="?route=logout">sair</a>
  </span>
  
  <nav>
    <a href="?route=home">home</a>
    <a href="?route=page1">Pagina 1</a>
    <a href="?route=page2">Página 2</a>
    <a href="?route=page3">Página 3</a>
    <a href="?route=logout">Sair</a>
  </nav>