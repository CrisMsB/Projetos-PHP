<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício3 </h1> 
 
 <?php
  //criando constantes na linguagem PHP
  define('TAXA_DESCONTO', 10/100);
  define('TAXA_ICMS', 12/100);
  define('COMISSAO_VENDEDOR', 5/100);

  $valorVenda = $_GET['valor-venda'];

  $valorDesconto = $valorVenda * TAXA_DESCONTO;
  $valorICMS     = $valorVenda * TAXA_ICMS;
  $valorComissao = $valorVenda * COMISSAO_VENDEDOR;

  $valorVenda    = number_format($valorVenda, 2, ",", ".");
  $valorICMS     = number_format($valorICMS, 2, ",", ".");
  $valorComissao = number_format($valorComissao, 2, ",", ".");
  $valorDesconto = number_format($valorDesconto, 2, ",", ".");

  echo "<p> Resultado do processamento de vendas: <br>
            Valor da venda = <span> R$$valorVenda </span> <br>
            Valor do ICMS  = <span> R$$valorICMS </span> <br>
            Valor da comissão do vendedor = <span> R$$valorComissao </span> <br>
            Valor do desconto dado ao cliente = <span> R$$valorDesconto </span> <br>
            Valor da taxa de desconto dado pela loja = <span>", TAXA_DESCONTO*100, "%</span> </p>";
 ?>
</body> 
</html> 