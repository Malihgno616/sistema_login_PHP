<?php 
defined('CONTROL') or die("Acesso negado");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina 2</title>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      width: 900px;
      margin: 0 auto;
    }
    h1 {
      text-align: center;
    }
    nav {
      background-color: #321;
      padding: 1em;
      text-align: center;
      display: flex;
      justify-content: space-between;
      
    }
    nav a {
      text-decoration: none;
      color: #fff;
      padding: 1em;
      transition: all .7s ease;
    }
    nav a:hover {
      
      background-color: #444;
    }
    span {
      color: #aaa;
    }
    a {
      text-decoration: none;
      color: #333;
    }
  </style>
</head>
<body>
  
<?php require 'nav.php' ?>

<h1>Página 2</h1>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla eligendi fuga tempore tempora quos a ipsum repudiandae eaque iure porro unde illo, obcaecati, vitae explicabo voluptatibus animi molestias dolore quod?</p>
</body>
</html>