<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de matrizes em PHP, includes e funções - avaliação </h1>
  
 <?php
 //recebendo os dados do formulário
  $autor1 = $_POST["autor1"];
  $autor2 = $_POST["autor2"];
  $autor3 = $_POST["autor3"];

  $isbn1 = $_POST["isbn1"];
  $isbn2 = $_POST["isbn2"];
  $isbn3 = $_POST["isbn3"];

  $preco1 = $_POST['preco1'];
  $preco2 = $_POST['preco2'];
  $preco3 = $_POST['preco3'];

  //criando a matriz - o índice associativo da matriz (I) é o ISBN de cada livro. No vetor interno, o J=0 é o nome do autor e o J=1 é o preço do livro
  
  $matrizLivros = [$isbn1 => [$autor1, $preco1],
                   $isbn2 => [$autor2, $preco2],
                   $isbn3 => [$autor3, $preco3]];

  //chamando a include que irá conter a subrotina para mostrar os dados do livro mais caro na matriz
  require "matriz.inc.php";

  //invocando a função, dentro da include, e passando para esta função, a matriz inteira
  mostrarDadosLivroMaisBarato($matrizLivros);

  //calculando a média de preços dos livros cadastrados, por meio da criação de um vetor auxiliar e usando a função array_sum()
  foreach($matrizLivros as $isbn => $vetorInterno)
   {
   $vetorAuxiliar[] = $vetorInterno[1];
   }

  $media = array_sum($vetorAuxiliar) / count($matrizLivros);

  $media = number_format($media, 2, ",", ".");
  echo "<p> A média de preços dos livros cadastrados na matriz é igual a <span> R$$media </span> </p>";

  ?>
</body> 
</html> 