<?php
 $sql = "SELECT * FROM $nomeDaTabela WHERE classificacao='0' ORDER BY quantia_estoque DESC";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 echo "<table>
        <caption> Relação de produtos perecíveis, ordenados pelo estoque, decrescentemente </caption>
        <tr>
         <th> ID </th>
         <th> Preço </th>
         <th> Estoque </th>
         <th> Classificação </th>
         <th> Descrição </th>
        </tr>";

 while($registro = $resultado->fetch_array())
  {
  $id        = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
  $preco     = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
  $estoque   = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
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



