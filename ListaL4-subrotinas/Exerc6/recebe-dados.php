<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subprogramação com PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Subrotinas e funções de usuário com PHP - listaL4 - exercício 2 </h1>
  
 <?php
  require "exercicio6.inc.php";
  $idade = $_POST["idade"];

  testarIdade($idade);

  podeVotar($idade);
 ?>
</body> 
</html> 