<?php 
// Subrotina para calcular a media de vendas
function calcularMediaPrecoVenda($matrizLivros) {
    $totalPrecos = 0;
    $quantidadeLivros = count($matrizLivros);

    foreach ($matrizLivros as $livros) {
        $totalPrecos += $livros[1];
    }

    if ($quantidadeLivros > 0) {
        $media = $totalPrecos / $quantidadeLivros;
        return number_format($media, 2); // Formata a média com duas casas decimais
    } else {
        return 0; // Retorna 0 se não houver livros cadastrados para evitar divisão por zero.
    }
}

// Subrotina para encontrar o fabricante mais caro
function encontrarAutorMaisCaro($matrizLivros) {
    $autorMaisCaro = null;
    $precoMaisCaro = PHP_FLOAT_MIN; // Inicialize com o menor valor possível

    foreach ($matrizLivros as $codigo => $livros) {
        $preco = $livros[1];

        if ($preco > $precoMaisCaro) {
            $precoMaisCaro = $preco;
            $autorMaisCaro = $livros[0]; // Correção aqui
        }
    }

    return $autorMaisCaro;
}