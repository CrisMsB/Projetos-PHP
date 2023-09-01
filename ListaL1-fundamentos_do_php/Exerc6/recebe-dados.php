<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício6 </h1> 
 
 <?php
  $valorCompra = $_POST['valor-compra'];

  $taxaComissao = $_POST['taxa-comissao'];

  $valorDaComissao = $valorCompra * $taxaComissao/100;

  $valorDaComissao = number_format($valorDaComissao, 2, ",", ".");

  echo "<p> De acordo com os dados fornecidos, o valor da comissão do vendedor é de <span> R$$valorDaComissao </span> </p>";
  ?>
</body> 
</html> 