<?php
//criando o banco de dados.
 $sql = "CREATE DATABASE IF NOT EXISTS $nomeDoBanco";
 $conexao->query($sql) OR exit($conexao->error);
 ?>