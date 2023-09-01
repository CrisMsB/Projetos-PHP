<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL2 - exercício4 </h1>
  
 <?php
  //A primeira coisa que fazemos, para relacionar a aplicação com o conteúdo que estamos vendo agora, é criarmos um vetor auxiliar para armazenar o preço de cada produto do formulário
  $vetorPrecos = ["Monitor" => 500,
                  "Teclado" => 100,
                  "Mouse" => 70.12];

 //agora, o passo seguinte é fazer o PHP receber, dos checkbox, por meio do navegador, todos os produtos comprados. O PHP guarda, automaticamente, todos os dados de um checkbox dentro de um vetor
 if(!isset($_POST['prod']))
  {
  $valorFinalCompra = 0;
  echo "<p> Caro usuário, você não adquiriu nenhum produto e o valor final da sua compra é <span> R$0,00 </span></p>";
  }
 else
  {
  $vetorProdutos = $_POST['prod']; //$vetorProdutos é um vetor

  //vamos percorrer o vetor de produtos comprados e acumular o preço de cada produto em uma variável somatória
  $valorFinalCompra = 0;
  foreach($vetorProdutos as $nomeProduto)
   {
   $valorFinalCompra = $valorFinalCompra + $vetorPrecos[$nomeProduto];
   }

   $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

   echo "<p> Caro usuário, de acordo com os produtos adquiridos, o valor final da sua compra é de <span> $valorFinalCompraFormatado </span> </p>";
  }
 ?>
</body> 
</html> 