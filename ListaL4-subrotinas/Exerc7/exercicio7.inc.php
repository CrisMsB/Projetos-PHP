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
