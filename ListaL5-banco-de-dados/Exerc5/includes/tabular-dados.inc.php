<?php
 $sql = "SELECT * FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 echo "<table>
        <caption> Relação de medicamentos cadastrados na base de dados </caption>
        <tr>
         <th> ID </th>
         <th> Nome </th>
         <th> Preço </th>
         <th> Data de validade </th>
        </tr>";

 while($registro = $resultado->fetch_array())
  {
  $id        = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
  $nome      = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
  $preco     = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
  $validade  = htmlentities($registro[3], ENT_QUOTES, "UTF-8");

  echo "<tr>
         <td> $id </td>
         <td> $nome </td>
         <td> $preco </td>
         <td> $validade </td>
        </tr>";    
  }
 echo "</table>";



