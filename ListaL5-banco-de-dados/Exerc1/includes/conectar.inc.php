<?php
 //comando específico para o PHP passar os dados da conexão e começar a "conversar" com o MyQSL
 $conexao = new mysqli($servidor, $usuario, $senha) OR exit($conexao->error);
 