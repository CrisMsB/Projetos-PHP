<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício9 </h1> 
 
 <?php
  $valorCompra = $_POST["valor-compra"];
  $desconto  = 0;
  $acrescimo = 0;

  if(!isset($_POST['forma-pagamento']))
   {
   die("<p> A forma de pagamento é informação obrigatória! </p>");
   }

  $formaPagamento = $_POST["forma-pagamento"];

  if($formaPagamento == "À vista")
   {
   $desconto = $valorCompra * 5/100;
   }
  else
   {
   $acrescimo = $valorCompra * 2/100;
   }

  
  if(isset($_POST['pagamento-cartao']))
   {
   $sorteio = "Cliente pagou com cartão, bandeira Visa, e <span> o cliente está apto a participar do sorteio mensal de um automóvel! </span>";
   }
  else
   {
   $sorteio = "Cliente não pagou com cartão, bandeira Visa, e, portanto, <span> o cliente NÃO está apto a participar do sorteio mensal de um automóvel! </span>";
   }
 
  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
  echo "<p> Resultado da compra: <br>
        Valor inicial da compra = <span> R$$valorCompra </span> <br>
        Desconto = <span> R$$desconto </span> <br>
        Acrescimo = <span> R$$acrescimo </span> <br>
        Valor final da compra = <span> R$$valorFinalCompra </span> <br>
        $sorteio </p>";
 ?>
</body> 
</html> 