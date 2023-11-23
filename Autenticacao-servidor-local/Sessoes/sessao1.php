<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Tratamento de sessões com PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Sessões com PHP </h1>
 <form action="sessao1.php" method="post">
  <fieldset>
   <legend> Alunos - cadastro de dados com sessões em PHP </legend>
   <label class="alinha"> Aluno: </label>
   <input type="text" name="aluno"> <br> 

   <label class="alinha"> Primeira nota de PRW: </label>
   <input type="number" name="nota" min="0" max="10" step="0.1"> <br> 
  </fieldset>

  <button name="criar-sessao"> Armazenar dados do aluno na sessão </button>
 </form>   
 <?php
  if(isset($_POST['criar-sessao']))
   {
   //abrindo a sessão do usuário
   session_start();

   $aluno = $_POST['aluno'];
   $notaPRW = $_POST['nota'];

   //criando variáveis de sessão no PHP
   $_SESSION['aluno'] = $aluno;
   $_SESSION['nota']  = $notaPRW;
   $_SESSION['data']  = date("d/m/Y");

   //ir para o arquivo sessao2.php e trabalhar com os dados da sessão
   echo "<p>
          <a href='sessao2.php' title='Executar as operações com as variáveis de sessão no arquivo sessao2.php'> Ir para o arquivo sessao2.php </a>
         </p>";
   }
 
 ?>
</body> 
</html> 