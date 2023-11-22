<?php
//conectando ao sdb
 $conexao = new mysqli($servidor, $usuario, $senha) OR exit($conexao->error);
 
 //conferindo se tudo deu certo se ocorrer algum erro ele informa.
 if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>