<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Integrando Banco de Dados com PHP </title> 
  <link rel="stylesheet" href="./../css/formata-banco.css">
</head> 

<body> 
 <h1> Integração de banco de dados com PHP - exercício 7 </h1>
 <form action="exerc7.php" method="post">
  <fieldset>
   <legend> Banco de dados + PHP - Cadastro de Projetos </legend>

   <label class="alinha"> ID: </label>
   <input type="text" name="id" autofocus> <br>

   <label class="alinha"> Orçamento: </label>
   <input type="number" name="orcamento" min="0" step="0.01"> <br>

   <label class="alinha"> Data de início do projeto: </label>
   <input type="date" name="inicio"> <br> 

   <label class="alinha"> Horas de execução do projeto: </label>
   <input type="number" name="horas" min="0"> <br> 

   <button name="cadastrar"> Cadastrar projeto </button>
  </fieldset>

  <fieldset>
    <legend> Outras operações sobre o banco de dados </legend>
    
    <div class="botoes">
      <button name="listar"> Listar ID e orçamento </button>
      <button name="contar" title="Mostar o números de projetos cadastrados após 01/01/2020"> Contar projetos </button>
      <button name="excluir"> Excluir projetos </button>

  </fieldset>
 </form>    

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

   if(isset($_POST['listar']))
   {
   require "./../includes/tabular-dados.inc.php"; 
   }

   if(isset($_POST['contar']))
   {
    require "./../includes/contar-projetos.inc.php";
   }
   
   if(isset($_POST['excluir']))
   {
    require "./../includes/excluir.inc.php";
   }

  require "./../includes/desconectar.inc.php";
 ?>
 
</body> 
</html> 