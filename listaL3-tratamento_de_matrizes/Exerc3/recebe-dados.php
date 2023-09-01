<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de Matrizes em PHP - listaL3 - exercício1 </h1>
  
 <?php

//formas de criar matrizes em PHP


$aluno1 = $_POST['nome-do-aluno1'];
$aluno2 = $_POST['nome-do-aluno2'];
$aluno3 = $_POST['nome-do-aluno3'];

$matric1 = $_POST['matric1'];
$matric2 = $_POST['matric2'];
$matric3 = $_POST['matric3'];

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

//outra forma
$matrizAlunos = [$matric1 => [$aluno1, $nota1],
                 $matric2 => [$aluno2, $nota2],
                 $matric3 => [$aluno3, $nota3]];
//vamos calcular a média de notas dos 3 alunos. Para isso vamos criar um vetor auxiliar que irá armazenar somente as notas dos alunos. Depois, usamos a função pronta do PHP array_sum() sobre este vetor auxiliar
foreach($matrizAlunos as $matricula => $vetorInterno)
{
  $vetorAuxiliar [] = $vetorInterno[1];
}

$media = array_sum($vetorAuxiliar)/count($vetorAuxiliar);

$media = number_format($media, 1, ",", ".");

echo"<p> O resultado da média final dos alunos cadastrados na matriz é igual a <span> $media </span> </p>";

 ?>
</body> 
</html>