<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL2 - exercício6 </h1>
  
 <?php
  $pessoa1 = $_POST['nome1'];
  $pessoa2 = $_POST['nome2'];
  $pessoa3 = $_POST['nome3'];

  $idade1 = $_POST['idade1'];
  $idade2 = $_POST['idade2'];
  $idade3 = $_POST['idade3'];

  $vetorPessoas = [$pessoa1 => $idade1,
                   $pessoa2 => $idade2,
                   $pessoa3 => $idade3];

  echo "<table>
         <caption> Relação de pessoas e suas idade cadastradas no vetor </caption>
         <tr>
          <th> Nome da pessoa </th>
          <th> Idade da pessoa </th>
         </tr>";

  foreach($vetorPessoas as $nome => $idade)
   {
   echo "<tr>
          <td> $nome </td>
          <td> $idade </td>
         </tr>";
   }
  echo "</table>";

  $menorIdade = min($vetorPessoas);

  $pessoaMaisNova = array_search($menorIdade, $vetorPessoas);

  echo "<p> Dados da pessoa mais nova cadastrada no vetor: <br>
            Nome = <span> $pessoaMaisNova </span> <br>
            Idade = <span> $menorIdade </span> </p>";
 ?>
</body> 
</html> 