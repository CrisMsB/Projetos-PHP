<?php
 //esta include implementa o código responsável por executar a consulta ao banco de dados que busca todos os dados dos alunos cadastrados
 //$sql = "SELECT * FROM $nomeDaTabela WHERE classificacao='0' ORDER BY quantia_estoque DESC ";
 
 //esse comando é para mostrar todos produtos da tabela SQL.
 $sql = "SELECT * FROM $nomeDaTabela ORDER BY quantia_estoque ASC ";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 //vamos pedir ao PHP para enviar ao navegador o cabeçalho da tabela html
 echo "<table>
        <caption> CTDS-PRW- Controle de Estoque </caption>
        <tr>
         <th> Id </th>
         <th> Preço </th>
         <th> Quantidade no Esqtoque </th>
         <th> Classificação do Produto </th>
         <th> Descrição do Produto </th>
        </tr>";

 //Para que o PHP mostre todos os dados dos produtos na tabela, na página web, devemos criar um laço de repetição que irá percorrer toda a estrutura da variável $resultado e mostrar os dados da consulta select dentro da tabela html
 while($registro = $resultado->fetch_array())
  {
  //observe, abaixo, a função do PHP especializada em evitar ataques do tipo XSS
  $id = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
  $preco  = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
  $estoque = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
  $classific = htmlentities($registro[3], ENT_QUOTES, "UTF-8");
  $descricao = htmlentities($registro[4], ENT_QUOTES, "UTF-8");

  echo "<tr>
         <td> $id </td>
         <td> $preco </td>
         <td> $estoque </td>
         <td> $classific </td>
         <td> $descricao </td>
        </tr>";    
  }
 echo "</table>";



