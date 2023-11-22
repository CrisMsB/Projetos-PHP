<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subprogramação com PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Subrotinas e funções de usuário com PHP - listaL4 - exercício 1 </h1>
  
 <?php
  //agora, devemos notar que a declaração de todas as funções estão em um arquivo externo. Obeserve, abaixo, como indicamos ao PHP para buscar o código destas funções na include em separado
  require "exercicio5.inc.php";
  
  
  //invocar a segunda rotina que calcula a média do aluno e devolve esta média para este ponto do script principal, onde a rotina foi chamada
  $nome = $_POST['nome-do-aluno'];
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $mediaCalculada = calcularMedia($nota1, $nota2);

  //invocar a terceira rotina, que recebe a média do aluno e testa sua aprovação. Esta não exige nenhum dado de retorno
  verificarAprovacao($mediaCalculada);
 ?>
</body> 
</html> 