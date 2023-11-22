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
  require "./../includes/dados-conexao.inc.php";
  require "./../includes/conectar.inc.php";
  require "./../includes/criar-banco.inc.php";
  require "./../includes/abrir-banco.inc.php";
  require "./../includes/definir-charset.inc.php";
  require "./../includes/criar-tabela.inc.php";

  if(isset($_POST['cadastrar']))
   {
   require "./../includes/cadastrar.inc.php";
   }

  if(isset($_POST["executar-operacao"]))
   {
   $operacao = $_POST['operacao'];

   if($operacao == "1")
    {
    require "./../includes/tabular-dados.inc.php";
    }

   if($operacao == "2")
    {
    require "./../includes/mostrar-descricao.inc.php";
    }

   if($operacao == "3")
    {
    require "./../includes/calcular-faturamento.inc.php";
    }
   }
   
  require "./../includes/desconectar.inc.php";
 ?>
 <a href="./../html/exercicio2.html"> Voltar ao início </a>    
</body> 
</html> 