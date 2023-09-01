<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL2 - exercício8 </h1>
  
 <?php
  //outra forma de declarar uma constante em PHP
  const TAXA_DESCONTO = 5/100;

  $vetorPreco = ["Arroz" => 5.40,
                 "Feijão" => 5.00,
                 "Macarrão" => 8.90,
                 "Pão" => 1.00];

  

  if(isset($_POST['prod']))
   {
   //pelo menos um remédio foi comprado
   $vetorProdutosComprados = $_POST['prod'];

   $soma = 0;

   foreach($vetorProdutosComprados as $indice => $nomeDoProduto)
    {
    $soma += $vetorPreco[$nomeDoProduto];
    }
  
  $desconto = 0;
  //testando a possibilidade de desconto
  if(isset($_POST["cartao"]))
    {
    $desconto = $soma * TAXA_DESCONTO;
    }

    $valorFinalCompra = $soma - $desconto;
    $valorFinalCompra = number_format($valorFinalCompra, 2, ",", ".");
    $desconto = number_format($desconto, 2, ",", ".");
    $soma = number_format($soma, 2, ",", ".");

    echo "<p> Resultado final da compra de Produtos no Super-Mercado AAA: <br>
              Valor inicial da compra = <span> R$$soma </span> <br>
              Valor do desconto = <span> R$$desconto </span> <br>
              Valor final da compra = <span> R$$valorFinalCompra </span> </p>";
   }else
    {
    echo "<p> Nenhum Produto foi adquirido. Valor final da compra = <span> R$0,00 </span> </p>";
    }  
 ?>
</body> 
</html> 