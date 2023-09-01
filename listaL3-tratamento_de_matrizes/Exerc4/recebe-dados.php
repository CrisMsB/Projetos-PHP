<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de matrizes em PHP - listaL3 - exercício 4 </h1>
  
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

  /*para encontrarmos o aluno pesquisado na matriz, criamos um vetor 
  auxiliar contendo, como índice, a matrícula de cada aluno e como conteúdo, 
  o nome. Depois, usamos a função de busca array_search() 
  sobre o vetor auxiliar*/
  foreach($matrizAlunos as $matricula => $vetorInterno)
   {
   $vetorAuxiliar[$matricula] = $vetorInterno[0];
   }

   $matriculaAlunoPesquisado = array_search($alunoPesquisado, $vetorAuxiliar);
   if($matriculaAlunoPesquisado == false)
   {
    echo "<p> Caro usuário, o nome do aluno pesquisado <span>
    $alunoPesquisado </span> não foi encontrado na matriz. </p>";
   }
   else
   {
    //ao entrar nesse bloco o PHP já sabe o nome do aluno pesquisado e sua matrícula. 
    //Para termos a sua nota de PRW, ACESSAMOS A MATRIZ, CONFORME ABAIXO:
    $notaAlunoPesquisado = $matrizAlunos[$matriculaAlunoPesquisado][1];
   }

  echo "<p> Dados do aluno pesquisado: <br>
        Nome = <span> $alunoPesquisado </span> <br>
        Matrícula = <span> $matriculaAlunoPesquisado </span> <br>
        Nota = <span> $notaAlunoPesquisado </span> </p>";
  ?>
</body> 
</html> 