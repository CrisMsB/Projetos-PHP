<?php
 //o objetivo desta parte do código é, dado o nome do médico, buscar, na tabela pacientes, quantos deles são atendidos por este médico. Antes disso, devemos verificar, no banco, se o nome do médico fornecido existe
 $medicoPesquisado = trim($conexao->escape_string($_POST['pesquisa-nome-medico']));

 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE medico = '$medicoPesquisado'";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 //agora, testamos se o  banco de dados encontrou o crm do médico pesquisado
 if($conexao->affected_rows == 0)
  {
  exit("<p> ERRO: o nome do médico fornecido não foi encontrado no banco de dados. Tente novamente!");
  }

 //recebendo o crm do médico pesquisado e criando a nova consulta na tabela pacientes

 $registro = $resultado->fetch_array();
 $crmEncontrado = $registro[0];

 //já temos o crm do médico pesquisado. Na última etapa, o PHP vai até a até a tabela de pacientes e conta quantos pacientes estão sendo atendidos por este crm
 $sql = "SELECT COUNT(*) FROM $nomeDaTabela2 WHERE crm_atendimento = '$crmEncontrado'";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 $vetorRegistro = $resultado->fetch_array();

 $numeroPacientesAtendidos = $vetorRegistro[0];

 echo "<p> Dados da pesquisa pelo nome do médico: <br>
       Médico pesquisado = <span> $medicoPesquisado </span> <br>
       Número de pacientes atendidos = <span> $numeroPacientesAtendidos </span> </p>";

 //embora o enunciado não tenha pedido, vamos mostrar, na página web, a relação de pacientes atendidos pelo médico pesquisado

 $sql = "SELECT * FROM $nomeDaTabela2 WHERE crm_atendimento = '$crmEncontrado'";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //testando se o médico pesquisado está atendendo algum paciente neste momento
 if($conexao->affected_rows == 0)
  {
  exit("<p> O médico pesquisado está cadastrado em nosso banco de dados, mas, no momento, não está responsável pelo atendimento de nenhum paciente internado nesta clínica.");
  }

 //criando o cabeçalho da tabela na página web
 echo "<table>
        <caption> Relação de pacientes atendidos, nesta data, pelo médico <span> $medicoPesquisado </span> </caption>
        <tr>
         <th> ID </th>
         <th> Paciente </th>
         <th> Data de internação </th>
         <th> CRM do responsável </th>
        </tr>";

 while($vetorRegistro = $resultado->fetch_array())
  {
  $id       = htmlentities($vetorRegistro[0], ENT_QUOTES, "UTF-8");
  $paciente = htmlentities($vetorRegistro[1], ENT_QUOTES, "UTF-8");
  $data     = htmlentities($vetorRegistro[2], ENT_QUOTES, "UTF-8");
  $crm      = htmlentities($vetorRegistro[3], ENT_QUOTES, "UTF-8");

  echo "<tr>
         <td> $id </td>
         <td> $paciente </td>
         <td> $data </td>
         <td> $crm </td>
        </tr>";  
  }
echo "</table>";


 


