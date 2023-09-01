<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL2 - exercício8 </h1>
  
 <?php
  //outra forma de declarar uma constante em PHP
  const TAXA_DESCONTO = 5/100;

  $vetorPreco = ["Paracetamol" => 50.12,
                 "Dipirona" => 21.00,
                 "Rivotril" => 78.49];

  

  if(isset($_POST['prod']))
   {
   //pelo menos um remédio foi comprado
   $vetorRemediosComprados = $_POST['prod'];

   $soma = 0;

   foreach($vetorRemediosComprados as $indice => $nomeDoRemedio)
    {
    $soma += $vetorPreco[$nomeDoRemedio];
    }
  
  $desconto = 0;
  //testando a possibilidade de desconto
  if(isset($_POST["idade"]))
   {
   $desconto = $soma * TAXA_DESCONTO;
   }

  $valorFinalCompra = $soma - $desconto;
  $valorFinalCompra = number_format($valorFinalCompra, 2, ",", ".");
  $desconto = number_format($desconto, 2, ",", ".");
  $soma = number_format($soma, 2, ",", ".");

  echo "<p> Resultado final da compra de medicamentos na Farmácia AAA: <br>
            Valor inicial da compra = <span> R$$soma </span> <br>
            Valor do desconto = <span> R$$desconto </span> <br>
            Valor final da compra = <span> R$$valorFinalCompra </span> </p>";
   }
  else
   {
   echo "<p> Nenhum medicamento foi adquirido. Valor final da compra = <span> R$0,00 </span> </p>";
   }  
 ?>
</body> 
</html> 