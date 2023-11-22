<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="./../css/formata-banco.css">
</head> 

<body> 
 <h1> Banco de Dados MySQL com PHP - processando notas de alunos </h1>

 <?php
  //a primeira coisa que fazemos é inserirmos todas as includes responsáveis pela conexão do nosso código em PHP com o banco de dados
  require "./../includes/dados-conexao.inc.php";
  require "./../includes/conectar.inc.php";
  require "./../includes/criar-banco.inc.php";
  require "./../includes/abrir-banco.inc.php";
  require "./../includes/definir-charset.inc.php";
  require "./../includes/criar-tabela.inc.php";

  //testar se o botão de cadastro foi acionado no formulário
  if(isset($_POST['cadastrar']))
   {
   require "./../includes/cadastrar.inc.php";
   }

  //testar se o botão para tabular dados dos alunos foi acionado no formulário
  if(isset($_POST['tabular-dados']))
   {
   require "./../includes/tabular-dados.inc.php";
   }

  //testar o botão que mostra o número de alunos aprovados em PRW
  if(isset($_POST['contar-aprovados']))
   {
   require "./../includes/contar-aprovados.inc.php";
   }

  require "./../includes/desconectar.inc.php";
 ?>
 <a href="./../html/exercicio1.html"> Voltar ao início </a>    
</body> 
</html> 