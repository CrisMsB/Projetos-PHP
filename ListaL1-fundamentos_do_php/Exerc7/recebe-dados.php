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

  //validando campos com botão de rádio em um formulário
  if(!isset($_POST['forma-pagamento']))
   {
   die("<p> Caro usuário, a forma de pagamento deve ser fornecida. Erro fatal! Aplicação encerrada! </p>"); //erro fatal: encerramos a aplicação
   }

  if(isset($_POST['entrega-domicilio']) == false)
   {
   die("<p> Caro usuário, a informação da entrega a domicílio deve ser fornecida. Aplicação encerrada. </p>");
   }

  //recebendo os dados da forma de pagamento (botões de radio)
  $formaPagamento = $_POST['forma-pagamento'];

  //recebendo os dados da forma de entrega (botões de radio)
  $formaEntrega = $_POST["entrega-domicilio"];

  $desconto  = 0;
  $acrescimo = 0;

  //descobrindo se o cliente pagou ou não com cartão e calculando o valor do acréscimo
  if($formaPagamento == "Sim")
   {
   $desconto = $valorCompra * 5/100;
   }

  //descobrindo se o cliente solicitou entrega a domicilio
  if($formaEntrega == "Sim")
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