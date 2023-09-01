<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL2 - exercício7 </h1>
  
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

  //ordenar o vetor de pessoas, mantendo a associação entre valor e índice, que já é automática quando ordenamos pelo índice, na ordem direta (crescente - não tem o r), e ordenando pelo índice (tem que ter o k no nome da função)

  ksort($vetorPessoas);

  echo "<table>
         <caption> Relação de pessoas e suas idade, ordenada, crescentemente, pelo nome </caption>
         <tr>
          <th> Nome da pessoa </th>
          <th> Idade da pessoa </th>
         </tr>";

  foreach($vetorPessoas as $nomeDaPessoa => $idadeDaPessoa)
   {
   echo "<tr>
          <td> $nomeDaPessoa </td>
          <td> $idadeDaPessoa </td>
         </tr>";
   }
  echo "</table>";  
 ?>
</body> 
</html> 