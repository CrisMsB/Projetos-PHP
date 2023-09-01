<?php

function verificarIdade($idade)
{
    $valorTestado = filter_var($idade, FILTER_VALIDATE_INT);
    //Observe o operador de identidade do PHP (===) com este operador o PHP testa também o tipo de dado de cada variável. 
    //Neste caso, o valor sempre será diferente do valor booleano Falso. isto não ocorre se usarmos o operador de igualdade (==);
    if ($valorTestado === false || $valorTestado == 0) {
        exit("<p> A idade deve ser um número inteiro maior ou diferente de zero. </p>");
    }
}

function podeVotar($idade)
{
    if ($idade >= 16) {
        echo "<p> O usuário afirma ter idade de <span> $idade </span> anos e pode votar! </p>";
    } else {
        echo "<p> Você tem <span> $idade </span> anos e não pode votar ainda. Vá estudar. </p>";
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
  //script principal

  //invocar a segunda rotina que calcula a média do aluno e devolve esta média para este ponto do script principal, onde a rotina foi chamada
  $idade = isset($_POST['idade']) ? $_POST['idade'] : 0;

  //invocar a terceira rotina, que recebe a média do aluno e testa sua aprovação. Esta não exige nenhum dado de retorno
  verificarIdade($idade);
  podeVotar($idade);

 ?>
</body> 
</html>