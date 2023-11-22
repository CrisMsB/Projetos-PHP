<?php
 $sql = "SELECT ID, orcamento FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 echo "<table>
        <caption> ID e orçamento dos projetos cadastrados </caption>
        <tr>
         <th> ID </th>
         <th> Orçamento </th>
        </tr>";

 while($registro = $resultado->fetch_array())
  {
  $id        = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
  $orcamento = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
  $orcamentoFormatado = number_format($orcamento, 2, ",", "." );
  echo "<tr>
         <td> $id </td>
         <td> $orcamentoFormatado</td>
        </tr>";    
  }
 echo "</table>";



