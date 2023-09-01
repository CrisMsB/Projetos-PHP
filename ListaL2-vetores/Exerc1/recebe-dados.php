<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL2 - exercício1 </h1>
  
 <?php
  //várias maneiras de se criar um vetor em PHP. Veja abaixo:
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];
  $nota3 = $_POST["nota3"];
  
  //primeira forma
  $vetorNotas[] = $nota1;
  $vetorNotas[] = $nota2;
  $vetorNotas[] = $nota3;

  //segunda forma
  $vetorNotas[0] = $nota1;
  $vetorNotas[1] = $nota2;
  $vetorNotas[2] = $nota3;

  //terceira forma
  $vetorNotas = array($nota1, $nota2, $nota3);

  //quarta forma
  $vetorNotas = [$nota1, $nota2, $nota3];

  //se quisermos visualizar o conteúdo no vetor na página web, para depuração de erros, usamos o comando abaixo:
  echo "<pre>";
  print_r($vetorNotas);
  echo "</pre>";

  //calculando a média de notas do vetor
  $media = array_sum($vetorNotas)/count($vetorNotas);

  echo "<p> De acordo com os dados fornecidos, a média das três notas de PRW é igual a <span> $media </span> </p>";
 ?>
</body> 
</html> 