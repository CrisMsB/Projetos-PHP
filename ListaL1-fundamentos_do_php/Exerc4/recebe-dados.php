<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício4 </h1> 
 
 <?php
  define('MULTIPLICADOR', 5/9);
  $tempF  = $_POST['tempF'];

  $tempC  = ($tempF - 32) * MULTIPLICADOR;

  $tempFFormatado = number_format($tempF, 1, ",", ".");
  $tempCFormatado = number_format($tempC, 1, ",", "."); 

  echo "<p> Resultado da conversão de escalas termométricas: <br>
            Valor da temperatura em Fahrenheit = <span> {$tempFFormatado}ºF </span> <br>
            Valor da temperatura em Celsius = <span> {$tempCFormatado}ºC </span> </p>";
  ?>
</body> 
</html> 