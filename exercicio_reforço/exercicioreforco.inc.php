<?php 
// Subrotina para calcular a media de vendas
 function calcularMediaPrecoVenda($matrizVeiculos) {
    $totalPrecos = 0;
    $quantidadeVeiculos = count($matrizVeiculos);

    foreach ($matrizVeiculos as $veiculo) {
        $totalPrecos += $veiculo[1];
    }

    if ($quantidadeVeiculos > 0) {
        return $totalPrecos / $quantidadeVeiculos;
    } else {
        return 0; // Retorna 0 se não houver veículos cadastrados para evitar divisão por zero.
    }
}

// Subrotina para encontrar o fabricante mais barato
function encontrarFabricanteMaisBarato($matrizVeiculos) {
    $veiculoMaisBarato = null;
    $precoMaisBarato = PHP_FLOAT_MAX;

    foreach ($matrizVeiculos as $codigo => $veiculo) {
        $preco = $veiculo[1];

        if ($preco < $precoMaisBarato) {
            $precoMaisBarato = $preco;
            $veiculoMaisBarato = $veiculo[0];
        }
    }

    return $veiculoMaisBarato;
}