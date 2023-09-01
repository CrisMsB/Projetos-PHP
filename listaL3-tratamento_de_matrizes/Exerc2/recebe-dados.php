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
//vamos mostrar os dados do aluno com maior nota criando um vetor auxliar que armazena a nota de cada aluno e tem, como seu índice, a matrícula do aluno . Após isso usamos as funções prontas do PHP para descobrir a maior nota(max()) e buscar as outras duas informações com array_search()
foreach($matrizAlunos as $matricula => $vetorInterno)
{
  $vetorAuxiliar [$matricula] = $vetorInterno[1];
}
$maiorNota = max($vetorAuxiliar);
$matricAlunoDestaque = array_search($maiorNota, $vetorAuxiliar);
$nomeAlunoDestaque = $matrizAlunos[$matricAlunoDestaque][0];

echo"<p> Dados do aluno destaque: <br>
     Nome = <span> $nomeAlunoDestaque </span> <br>
     Matrícula = <span> $matriculaAlunoDestaque </span> <br>
     Nota = <span> $maiorNota </span> </p>";

 ?>
</body> 
</html>