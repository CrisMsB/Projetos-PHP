<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="./../css/formata-login.css">
</head> 

<body> 
 <h1> Login de usuário com PHP </h1>

 <form action="cadastro.php" method="post">
  <fieldset>
    <legend> Cadastro de usuário </legend>

    <label class="alinha"> Nome completo: </label>
    <input type="text" name="nome" placeholder="Seu nome completo aqui..." autofocus> <br>

    <label class="alinha"> E-mail: </label>
    <input type="email" name="email"> <br>

    <label class="alinha"> Login: </label>
    <input type="text" name="login"> <br>

    <label class="alinha"> Senha: </label>
    <input type="password" name="senha"> <br>

    <button name="cadastrar"> Cadastrar usuário </button>
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
   
  require "./../includes/desconectar.inc.php";
 ?>
  
</body> 
</html> 