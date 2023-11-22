<?php
 $nome      = $conexao->escape_string(trim($_POST['nome']));
 $preco     = $conexao->escape_string(trim($_POST['preco']));
 $dataValidade   = $conexao->escape_string(trim($_POST['validade']));

 $sql = "INSERT $nomeDaTabela VALUES(
                    null,
                   '$nome',
                    $preco, 
                   '$dataValidade')";

 $conexao->query($sql) OR $conexao->error;

 echo "<p> Dados do medicamento cadastrados com sucesso no banco de dados. </p>";