<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício2 </h1> 
 
 <?php
  $distancia     = $_POST["distancia"];
  $consumo       = $_POST["consumo"];
  $precoPorLitro = $_POST['preco'];

  //calculando quantos litros serão gastos na viagem
  $quantosLitros = $distancia / $consumo;

  //calculando quantos reais a Maria gastou na viagem
  $quantosReais = $quantosLitros * $precoPorLitro;  


  //formatando variáveis numéricas. Faça isso logo antes do comando echo
  $precoPorLitro = number_format($precoPorLitro, 2, ",", ".");
  $quantosReais  = number_format($quantosReais, 2, ",", ".");
  $quantosLitrosFormatado = number_format($quantosLitros, 0, ",", ".");

  echo "<p> Processando os dados da viagem da Maria: <br>
        Gasto em reais com a viagem = <span> R$$quantosReais </span> <br>
        Gasto em litros de combustível = <span> $quantosLitrosFormatado litros </span> <br>
        Preço por litro de combustível = <span> R$$precoPorLitro </span> </p>";
 ?>
</body> 
</html> 