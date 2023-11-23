<?php
 //cabeçalho da função
 function mostrarDadosLivroMaisBarato ($matrizLivros)
  {
  //corpo da função - percorrer toda a matriz e criar um vetor auxiliar de preços

  foreach($matrizLivros as $isbn => $vetorInterno)
   {
   $vetorAuxiliar[$isbn] = $vetorInterno[1];
   }

  //usar a função max() no vetorAuxiliar, descobrindo o maior preço
  $maiorPreco = max($vetorAuxiliar);
  //descobrindo o isbn do livro mais caro
  $isbnLivroMaisCaro = array_search($maiorPreco, $vetorAuxiliar);
  //buscando, na matriz, o nome do autor
  $autorLivroMaisCaro = $matrizLivros[$isbnLivroMaisCaro][0];

  $maiorPreco = number_format($maiorPreco, 2, ",", ".");

  echo "<p> Dados do livro mais caro cadastrado: <br>
            Autor = <span> $autorLivroMaisCaro </span> <br>
            ISBN = <span> $isbnLivroMaisCaro </span> <br>
            Preço = <span> R$$maiorPreco </span> </p>";

  }