<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL2 - exercício2 </h1>
  
 <?php
  $aluno1 = $_POST['nome-do-aluno1'];
  $aluno2 = $_POST['nome-do-aluno2'];
  $aluno3 = $_POST['nome-do-aluno3'];

  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  //criando o vetor de índice associativo
  $vetorAlunos = [$aluno1 => $nota1,
                  $aluno2 => $nota2,
                  $aluno3 => $nota3];

  /*echo "<pre>";
  print_r($vetorAlunos);
  echo "</pre>";*/

  echo "<table>
         <caption> Relação de alunos e notas de PRW na segunda fase do CTDS </caption>
         <tr>
          <th> Nome do aluno </th>
          <th> Nota de PRW </th>
         </tr>";

  //usando o laço específico do PHP para percorrer um vetor ou matriz
  foreach($vetorAlunos as $nomeDoAluno => $notaDoAluno)
   {
   echo "<tr>
          <td> $nomeDoAluno </td>
          <td> $notaDoAluno </td>
         </tr>";
   }
  echo "</table>";

  //descobrir a maior nota no vetor
  $maiorNota = max($vetorAlunos);

  //vamos descobrir o índice que contém a maior nota, que é, justamente, o nome do aluno
  $alunoComMaiorNota = array_search($maiorNota, $vetorAlunos);

  echo "<p> Dados do aluno com maior desempenho cadastrado no vetor: <br>
            Nome do aluno = <span> $alunoComMaiorNota </span> <br>
            Nota do aluno = <span> $maiorNota </span> </p>";
 ?>
</body> 
</html> 