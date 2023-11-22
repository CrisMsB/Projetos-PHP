<?php
 function calcularComissao($valorVenda, $percentComissao)
  {
  $valorComissao = $valorVenda * $percentComissao/100;
  return $valorComissao;
  }

 function calcularDescontoCliente($valorVenda)
  {
  $desconto = 0;
  if(isset($_POST['pagamento']))
   {
   $desconto = $valorVenda * 5/100;
   }
  return $desconto;  
  }
  function calcularValorFinalVenda($valorVenda, $desconto)
   {
    $valorFinalCompra = $valorVenda - $desconto;    
    return $valorFinalCompra;
   }

  function mostrarResultados($valorVenda, $percentComissao, $valorComissao, $desconto, $valorFinalCompra)
   {
   $valorVenda    = number_format($valorVenda, 2, ",", ".");
   $desconto      = number_format($desconto, 2, ",", ".");
   $valorComissao = number_format($valorComissao, 2, ",", ".");
   $valorFinalCompra = number_format($valorFinalCompra, 2, ",", ".");
   $percentComissao = number_format($percentComissao, 1, ",", ".");

  echo "<p> Resultado do processamento de vendas: <br>
            Valor da venda = <span> R$$valorVenda </span> <br>
            Valor do desconto  = <span> R$$desconto </span> <br>
            Valor da comissão do vendedor = <span> R$$valorComissao </span> <br>
            Valor final da venda = <span> R$$valorFinalCompra </span> <br>
            Percentual de comissão do vendedor = <span>{$percentComissao}%</span> </p>";

   }
?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subrotina com PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Funções de usuário com PHP - listaL4 - exercício 4 </h1> 
 
 <?php
  $valorVenda = $_POST['valor-venda'];
  $percentComissao = $_POST['percent-comissao'];

  $valorComissao = calcularComissao($valorVenda, $percentComissao);
  $desconto = calcularDescontoCliente($valorVenda);
  $valorFinalCompra = calcularValorFinalVenda($valorVenda, $desconto);
  mostrarResultados($valorVenda, $percentComissao, $valorComissao, $desconto, $valorFinalCompra);
 ?>
</body> 
</html> 