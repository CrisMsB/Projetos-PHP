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

//alimentando a matriz

$matrizAlunos[$matric1][0] = $aluno1;
$matrizAlunos[$matric1][1] = $nota1;

$matrizAlunos[$matric2][0] = $aluno2;
$matrizAlunos[$matric2][1] = $nota2;

$matrizAlunos[$matric3][0] = $aluno3;
$matrizAlunos[$matric3][1] = $nota3;

//outra forma
$matrizAlunos = [$matric1 => [$aluno1, $nota1],
                 $matric2 => [$aluno2, $nota2],
                 $matric3 => [$aluno3, $nota3]];


echo "<pre>";
print_r($matrizAlunos);
echo "</pre>";


  echo "<table>
         <caption> Rendimento acadêmico dos alunos da segunda fase de  do CTD - PRW </caption>
         <tr>
          <tr> Matrícula </th>
          <th> Nome do aluno </th>
          <th> Nota de PRW </th>
         </tr>";

  //usando o laço específico do PHP para percorrer um vetor ou matriz
  foreach($matrizAlunos as $matricula => $vetorInterno)
  {
       echo"<tr>
       <td> $matricula </td>
       <td> $vetorInterno[0] </td>
       <td> $vetorInterno[1] </td>
       </tr>";
  }

 ?>
</body> 
</html>