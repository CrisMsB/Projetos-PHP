<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício5 </h1> 
 
 <?php
  define('TAXA_CAMBIO', 4.87);
  $quantosDolares = $_POST['quantos-dolares'];

  $quantosReais = $quantosDolares * TAXA_CAMBIO;

  $quantosDolares = number_format($quantosDolares, 2, ",", ".");
  $quantosReais   = number_format($quantosReais, 2, ",", "."); 

  echo "<p> Resultado da conversão de moedas: <br>
            Quantia em dólares fornecida = <span> $$quantosDolares </span> <br>
            Quantia em reais convertida = <span> R$$quantosReais </span> <br>
            Valor da taxa de câmbio = <span> R$", TAXA_CAMBIO, "</span> </p>";
  ?>
</body> 
</html> 