<?php
 //comandos para a criação automática do banco de dados CTDS_PRW no MySQL
 $sql = "CREATE DATABASE IF NOT EXISTS $nomeDoBanco";
 $conexao->query($sql) OR exit($conexao->error);