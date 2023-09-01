<?php
 //área da implementação das rotinas. Notar que os nomes das funções não são sensíveis ao caso
 function testarNOME()
  {
  $nome = $_POST['nome-do-aluno'];
  $nome = trim($nome); //o comando trim exclui os espaços em branco dentro da variável
  if(strlen($nome) == 0)
   {
   die("<p> A caixa com o nome do aluno não pode estar vazia. </p>");
   }
  }

 function calcularMedia($nota1, $nota2)
  {
  $media = ($nota1 + $nota2)/2; //a variável $media é local. Portanto, quando o PHP chegar ao final da execução desta função, todas as variáveis locais são perdidas. Se não hover o comando return, o PHP devolve para a área do script principal o valor null
  return $media;
  }

 function verificarAprovacao($x)
  {
  if($x >= 6)
   {
   echo "<p> Aluno conseguiu aprovação, com média final <span> $x </span> </p>";
   }
  else
   {
    echo "<p> Aluno NÃO conseguiu aprovação. Sua média final é <span> $x </span> </p>"; 
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
 <h1> Subrotinas e funções de usuário com PHP - listaL4 - exercício 1 </h1>
  
 <?php
  //script principal
  //invocar uma função de usuário para testar se a caixa com nome não está vazia   
  testarNome();

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