<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício7 </h1> 
 
 <?php
  $valorCompra = $_POST["valor-compra"];
  $desconto  = 0;
  $acrescimo = 0;

  //testando se um checkbox foi marcado - forma de pagamento
  if(isset($_POST['forma-pagamento']))
   {
   $desconto = $valorCompra * 5/100;
   }

  //testando se o checkbox foi marcado - entrega a domicílio
  if(isset($_POST['entrega-domicilio']))
   {
   $acrescimo = $valorCompra * 2/100;
   }
  
  //calculando o valor final da compra
  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
  echo "<p> Resultado da compra: <br>
        Valor inicial da compra = <span> R$$valorCompra </span> <br>
        Desconto = <span> R$$desconto </span> <br>
        Acrescimo = <span> R$$acrescimo </span> <br>
        Valor final da compra = <span> R$$valorFinalCompra </span> </p>";
 ?>
</body> 
</html> 