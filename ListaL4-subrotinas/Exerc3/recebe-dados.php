<?php
 function converterDeFparaC($temp)
  {
  $tempConvertida = ($temp - 32) * 5/9;
  echo "<p> Resultado da conversão de escala termométrica: <br>
            Temperatura em Fahrenheit = <span> {$temp}°F </span> <br>
            Temperatura convertida para Celsius = <span> {$tempConvertida}°C </span> </p>";
  }

 function converterDeCparaF($temp)
  {
  $tempConvertida = ($temp * 9/5) + 32;
  echo "<p> Resultado da conversão de escala termométrica: <br>
            Temperatura em Celsius = <span> {$temp}°C </span> <br>
            Temperatura convertida para Fahrenheit = <span> {$tempConvertida}°F </span> </p>";
  }
?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Subprogramação com PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Subrotinas e funções de usuário com PHP - listaL4 - exercício 3 </h1>
  
 <?php
  $temp = $_POST['temp'];

  $escala = $_POST['escala'];

  if($escala == "deFparaC")
   {
   converterDeFparaC($temp);
   }
  else
   {
   converterDeCparaF($temp);
   } 
 ?>
</body> 
</html> 