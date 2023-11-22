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
