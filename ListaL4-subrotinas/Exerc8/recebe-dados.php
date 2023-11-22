<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subprogramação com PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Subrotinas e funções de usuário com PHP - listaL4 - exercício 8 </h1>
  
 <?php
  require "exercicio8.inc.php";

  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $tipoMedia = $_POST['media'];

  if($tipoMedia == "simples")
   {
   $mediaCalculada = calcularMediaSimples($nota1, $nota2, $nota3); 
   $mediaEscolhida = "Média aritmética Simples";
   }

  else
   {
   $mediaCalculada = calcularMediaPonderada($nota1, $nota2, $nota3);
   $mediaEscolhida = "Média aritmética Ponderada";
   }

  echo "<p> Resultado do rendimento do aluno em CTDS-PRW: <br>
            Nota1 = <span> $nota1 </span> <br>
            Nota2 = <span> $nota2 </span> <br>
            Nota3 = <span> $nota3 </span> <br>
            Valor da média = <span> $mediaCalculada </span> <br>
            Tipo de média calculada = <span> $mediaEscolhida </span> </p>";
 ?>
</body> 
</html> 