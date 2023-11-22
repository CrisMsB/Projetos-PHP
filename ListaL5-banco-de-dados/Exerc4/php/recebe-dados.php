<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="./../css/formata-banco.css">
</head> 

<body> 
 <h1> Banco de Dados MySQL com PHP - Clínica AAA </h1>

 <?php
  require "./../includes/dados-conexao.inc.php";
  require "./../includes/conectar.inc.php";
  require "./../includes/criar-banco.inc.php";
  require "./../includes/abrir-banco.inc.php";
  require "./../includes/definir-charset.inc.php";
  require "./../includes/criar-tabelas.inc.php";

  if(isset($_POST['cadastrar-medico']))
   {
   require "./../includes/cadastrar-medico.inc.php";
   }

  if(isset($_POST['cadastrar-paciente']))
   {
   require "./../includes/cadastrar-paciente.inc.php";
   }

  if(isset($_POST['pesquisa-medico1']))
   {
   require "./../includes/pesquisa1.inc.php";
   }

  if(isset($_POST["pesquisa-medico2"]))
   {
   require "./../includes/pesquisa2.inc.php";
   }

  require "./../includes/desconectar.inc.php";
 ?>
 <a href="./../html/exercicio4.html"> Voltar ao início </a>    
</body> 
</html> 