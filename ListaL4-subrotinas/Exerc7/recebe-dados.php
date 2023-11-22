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
  require "exercicio7.inc.php";
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