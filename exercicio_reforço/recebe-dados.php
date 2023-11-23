<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Matrizes em PHP</title>
    <link rel="stylesheet" href="formata-formulario.css">
</head>

<body>
<h1>Resultado do Registro</h1>

<?php
require "exercicioreforco.inc.php";


if(isset($_POST['registrar-dados']))
{
    $nomeFabricante1 = $_POST['nome-fabricante1'];
    $nomeFabricante2 = $_POST['nome-fabricante2'];
    $nomeFabricante3 = $_POST['nome-fabricante3'];

    $codigoChassi1 = $_POST["codigo-chassi1"];
    $codigoChassi2 = $_POST["codigo-chassi2"];
    $codigoChassi3 = $_POST["codigo-chassi3"];

    $precoVeiculo1 = $_POST["preco-veiculo1"];
    $precoVeiculo2 = $_POST["preco-veiculo2"];
    $precoVeiculo3 = $_POST["preco-veiculo3"];

    $matrizVeiculos = [
        $codigoChassi1 => [$nomeFabricante1, $precoVeiculo1],
        $codigoChassi2 => [$nomeFabricante2, $precoVeiculo2],
        $codigoChassi3 => [$nomeFabricante3, $precoVeiculo3]
    ];
//=====================================================================

    $mediaPrecoVenda = calcularMediaPrecoVenda($matrizVeiculos);
    $fabricanteMaisBarato = encontrarFabricanteMaisBarato($matrizVeiculos);

    echo "<p>Média dos preços de venda: $mediaPrecoVenda</p>";
    echo "<p>Fabricante mais barato: $fabricanteMaisBarato</p>";  
  }
 ?>
</body> 
</html> 