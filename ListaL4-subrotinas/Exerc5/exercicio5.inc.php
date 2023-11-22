<?php 
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