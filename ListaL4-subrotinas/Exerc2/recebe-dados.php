<?php
 function testarIdade($idade)
  {
  $valorTestado = filter_var($idade, FILTER_VALIDATE_INT);
  //observe o operador de identidade do PHP (===). Com este operador, o PHP testa, também, o tipo de dado de cada variável. Neste caso, o valor zero sempre será diferente do valor booleano false. Isto não ocorre se usarmos o operador de igualdade (==)
  if($valorTestado === false OR $valorTestado < 0)
   {
    exit("<p> A idade deve ser um inteiro maior ou igual a zero. </p>");
   }
  }
  
 function podeVotar($idade)
  {
  if($idade >= 16)
   {
   echo "<p> O usuário afirmou ter <span> $idade anos </span> e já pode votar. </p>";
   }
  else
   {
   echo "<p> O usuário afirmou ter <span> $idade anos </span> e não pode votar. </p>";
   }
  }            
 ?>
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
  $idade = $_POST["idade"];

  testarIdade($idade);

  podeVotar($idade);
 ?>
</body> 
</html> 