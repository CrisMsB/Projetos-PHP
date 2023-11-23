<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="./../css/formata-login.css">
</head> 

<body> 
 <h1> Login de usuário com PHP </h1>

 <form action="login.php" method="post">
  <fieldset>
    <legend> Login de usuário </legend>

    <label class="alinha"> Login: </label>
    <input type="text" name="login" autofocus> <br>

    <label class="alinha"> Senha: </label>
    <input type="password" name="senha"> <br>

    <button name="logar"> Efetuar login </button>
  </fieldset>
 </form>
 <?php
  require "./../includes/dados-conexao.inc.php";
  require "./../includes/conectar.inc.php";
  require "./../includes/criar-banco.inc.php";
  require "./../includes/abrir-banco.inc.php";
  require "./../includes/definir-charset.inc.php";
  require "./../includes/criar-tabela.inc.php";

  if(isset($_POST['logar']))
   {
   require "./../includes/logar.inc.php";
   }
   
  require "./../includes/desconectar.inc.php";
 ?>
  
</body> 
</html> 