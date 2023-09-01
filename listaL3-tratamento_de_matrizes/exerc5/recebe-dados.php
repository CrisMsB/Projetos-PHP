<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de matrizes em PHP - listaL3 - exercício 5 </h1>
  
 <?php
  $aluno1 = $_POST["nome-do-aluno1"];
  $aluno2 = $_POST["nome-do-aluno2"];
  $aluno3 = $_POST["nome-do-aluno3"];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];
  
  $alunoPesquisado = $_POST["aluno-pesquisado"];
  
  $matrizAlunos = [$matric1 => [$aluno1, $nota1],
                   $matric2 => [$aluno2, $nota2],
                   $matric3 => [$aluno3, $nota3]];

  /*Para ordenarmos os dados dos alunos em função da nota, decrescentemente, 
  criamos um vetor auxiliar a partir da matriz. O índice deste vetor será a
  matrícula do aluno e o conteúdodeste vetor será a nota do aluno */

  foreach($matrizAlunos as $matricula => $vetorInterno)
   {
   $vetorAuxiliar[$matricula] = $vetorInterno[1];
   }

   // vamos ordenar o vetor auxiliar
   arsort($vetorAuxiliar);
   echo "<table>
         <caption> Resultado semestral do rendimento dos alunos de CTDS-PRW - Ordenado pela nota </caption>
         <tr> Matrícula </tr>
         <tr> Nome  </tr>
         <tr> Média de PRW </tr>
         </tr>";
  foreach($vetorAuxiliar as $matric => $nota)
  {
    $nome = $matrizAlunos[$matric][0];
    echo "<tr>
          <td>$matric</td>
          <td>$nome</td>
          <td>$nota</td>
          </tr>";
  }
  echo "</table>";
  ?>
</body> 
</html> 