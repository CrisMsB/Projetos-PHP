<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Tratamento de sessões com PHP </title>
  <link rel="stylesheet" href="formata-formulario.css"> 
</head> 

<body> 
 <h1> Lendo e apagando variáveis de sessão com PHP </h1>
 <form action="sessao2.php" method="post">
  <fieldset>
   <legend> Operações com variáveis de sessão </legend>
   
   <button name="ler-sessao"> Mostrar dados da sessão </button>
   <button name="apagar-sessao"> Apagar dados da sessão </button>
  </fieldset>
 </form>   
 <?php
  session_start();

  if(isset($_POST['ler-sessao']))
   {
   //lembrar que, sempre, antes de acessarmos o vetor de sessões, devemos testar duas coisas: a primeira, se cada variável de sessão existe; a segunda, se o próprio vetor inteior da sessão também existe
   if(isset($_SESSION) and isset($_SESSION['aluno']) and isset($_SESSION['nota'])  and isset($_SESSION['data']))
    {
    //tudo ok com as variáveis de sessão
    echo "<p> Dados lidos das variáveis de sessão criadas no arquivo sessao1.php: <br>
          Aluno = <span> {$_SESSION["aluno"]} </span> <br>
          Nota de PRW = <span> {$_SESSION["nota"]} </span> <br>
          Data = <span> {$_SESSION["data"]} </span> </p>";
    }
   else
    {
    //uma ou mais variáveis de sessão não existem
    echo "<p> Um ou mais dados da sessão não estão disponíveis. </p>";
    }
   }

  if(isset($_POST['apagar-sessao']))
   {
   if(isset($_SESSION) and isset($_SESSION['aluno']) and isset($_SESSION['nota'])  and isset($_SESSION['data']))
    {
    //tudo ok com as variáveis de sessão - vamos efetuar o logout do usuário (apagar a sessão)
    $_SESSION = [];
    session_destroy();

    echo "<p> Usuário efetuou logout - sessão excluída com sucesso. </p>";
    }
   else
    {
    echo "<p> Um ou mais dados da sessão não estão disponíveis. </p>";
    }
   } 
 ?>
</body> 
</html> 