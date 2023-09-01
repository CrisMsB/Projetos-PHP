<?php

function converterDeFparaC($temp)
{
    $tempConvertida = ($temp - 32) * 5/9;
    echo "<p>Resultado da conversão de escalas termométricas:<br>Valor da temperatura em Fahrenheit = <span>{$temp}ºF</span></p>";
}

function converterDeCparaF($temp)
{
    $tempConvertida = ($temp * 9/5) + 32;
    echo "<p>Resultado da conversão de escalas termométricas:<br>Valor da temperatura em Fahrenheit = <span>{$temp}ºF</span></p>";
}

?>

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Subprogramação com PHP</title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
<h1>Subrotinas e funções de usuário com PHP - listaL4 - exercício 3</h1>
  
<?php
$temp = $_POST['temperatura'];
$escala = $_POST['escala'];

if ($escala == "deFparaC") {
    converterDeFparaC($temp);
} else {
    converterDeCparaF($temp);
}
?>
</body> 
</html>