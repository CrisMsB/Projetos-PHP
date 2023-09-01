<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL2 - exercício5 </h1>
  
 <?php
  $idade1 = $_POST["idade1"];
  $idade2 = $_POST["idade2"];
  $idade3 = $_POST["idade3"];

  $vetorIdades = [$idade1, $idade2, $idade3];

  $media = array_sum($vetorIdades)/count($vetorIdades);

  echo "<p> De acordo com os dados fornecidos, a média das três nidades é igual a <span> $media </span> </p>";
 ?>
</body> 
</html> 