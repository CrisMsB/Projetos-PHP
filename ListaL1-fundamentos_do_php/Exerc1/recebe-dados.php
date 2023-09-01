<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício1 </h1>
 
 
 <?php
  //esta é uma área exclusiva da página para execução de comandos da linguagem PHP. Não podemos ter, aqui, nenhuma tag HTML e nenhuma propriedade CSS

  //fazendo o php receber os dados do navegador e gaurdar estes dados em variáveis
  $nomeDoAluno = $_POST["nome-do-aluno"]; /*O comando depende do método usado pelo navegador para transportar os dados ao servidor*/

  $nota1 = $_POST["nota1"];
  $peso1 = $_POST['peso1'];
  $nota2 = $_POST['nota2'];
  $peso2 = $_POST["peso2"];
  
  //calculando a média ponderada do aluno - notar que, em PHP, nomes de variáveis são sensíveis ao caso
  $media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

  //mostrando o resultado da média na página web
  echo "<p> Caro(a) aluno(a) <span> $nomeDoAluno </span>, de acordo com os dados fornecidos, sua média final em PRW é igual a <span> $media </span> </p>";
 ?>
</body> 
</html> 