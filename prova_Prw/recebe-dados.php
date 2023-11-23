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
require "prova.inc.php"; // Certifique-se de que o arquivo "prova.inc.php" contém as funções necessárias.

if(isset($_POST['registrar-dados']))
{
    $nomeAutor1 = $_POST['nome-autor1'];
    $nomeAutor2 = $_POST['nome-autor2'];
    $nomeAutor3 = $_POST['nome-autor3'];

    $codigoIsbn1 = $_POST["codigo-ISBN1"];
    $codigoIsbn2 = $_POST["codigo-ISBN2"];
    $codigoIsbn3 = $_POST["codigo-ISBN3"];

    $precolivro1 = $_POST["preco-livro1"];
    $precolivro2 = $_POST["preco-livro2"];
    $precolivro3 = $_POST["preco-livro3"];

    $matrizLivros = [
        $codigoIsbn1 => [$nomeAutor1, $precolivro1],
        $codigoIsbn2 => [$nomeAutor2, $precolivro2],
        $codigoIsbn3 => [$nomeAutor3, $precolivro3]
    ];

    $mediaPrecoVenda = calcularMediaPrecoVenda($matrizLivros);
    $autorMaisCaro = encontrarAutorMaisCaro($matrizLivros);

    echo "<p>Média dos preços de venda: $mediaPrecoVenda</p>";
    echo "<p>Autor mais caro: $autorMaisCaro</p>";
}
?>
</body>
</html>
