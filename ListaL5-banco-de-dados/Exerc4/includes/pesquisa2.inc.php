<?php
 $medicoPesquisado = trim($conexao->escape_string($_POST['pesquisa-nome-medico2']));
 $dataFornecida = trim($conexao->escape_string($_POST['data']));

 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE medico = '$medicoPesquisado'";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 if($conexao->affected_rows == 0)
  {
  exit("<p> ERRO: o nome do médico fornecido não foi encontrado no banco de dados. Tente novamente!");
  }

 $registro = $resultado->fetch_array();
 $crmEncontrado = $registro[0];

 //agora, faremos uma consulta ao banco de dados, na tabela pacientes, com o crm do médico pesquisado, para buscar o nome e a data de internação de cada paciente atendido por este médico, após a data fornecida
 $sql = "SELECT paciente, data_internacao FROM $nomeDaTabela2 WHERE data_internacao > '$dataFornecida' AND crm_atendimento ='$crmEncontrado'";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 if($conexao->affected_rows == 0)
  {
  exit("<p> O médico pesquisado está cadastrado em nosso banco de dados, mas, no momento, não está responsável pelo atendimento de nenhum paciente internado nesta clínica; OU, todos os pacientes cadastrados no banco de dados foram internados ANTES da data fornecida.");
  }
 $vetorData = explode("-", $dataFornecida);
 $dataFornecida = $vetorData[2] . "/" . $vetorData[1] . "/" . $vetorData[0];

 echo "<table>
        <caption> Relação de pacientes atendidos, após da data <span> $dataFornecida </span>, pelo médico <span> $medicoPesquisado </span> </caption>
        <tr>
         <th> Paciente </th>
         <th> Data de internação </th>
        </tr>";

 while($vetorRegistro = $resultado->fetch_array())
  {
  $paciente = htmlentities($vetorRegistro[0], ENT_QUOTES, "UTF-8");
  $data     = htmlentities($vetorRegistro[1], ENT_QUOTES, "UTF-8");
  //manipulando formato de datas com o auxílio de vetores em PHP
  $vetorData = explode("-", $data);
  $data = $vetorData[2] . "/" . $vetorData[1] . "/" . $vetorData[0];

  echo "<tr>
         <td> $paciente </td>
         <td> $data </td>
        </tr>";  
  }
echo "</table>";


 


