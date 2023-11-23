<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Login de usuário com PHP </title> 
  <link rel="stylesheet" href="./../css/formata-login.css">
</head> 

<body> 
 <h1> Modelo de validação de acesso com PHP e banco de dados </h1>
 <form action="home.php" method="post">
  <fieldset>
   <legend> Login de usuário - home </legend>
   
   <button name="cadastrar"> Cadastrar usuário </button>
   <button name="logar"> Logar usuário </button>
  </fieldset>
 </form> 
 
 <?php
  if(isset($_POST['cadastrar']))
   {
   //usando o comando de redirecionamento automático para qualquer página com PHP
   header("location: cadastro.php");
   }

  if(isset($_POST['logar']))
   {
   header("location: login.php");
   }
 ?>
</body> 
</html> 