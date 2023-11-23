<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Login de usuário com PHP </title> 
  <link rel="stylesheet" href="./../css/formata-login.css">
</head> 

<body> 
 <?php
  //a chamada desta include, que testa (com variáveis de sessão) se o usuário passou pelo login ou cadastro, deve estar presente em cada página restrita de nossa aplicação
  require "./../includes/valida-acesso.inc.php";
 ?>
 <h1> Página de acesso restrito </h1>
 <p> Bem-vindo, usuário especial ou administrador do nosso sistema. Aqui, 
  você tem acesso a funções privadas de nossa aplicação web. </p> 
<!--área de logout manual do usúario-->
<form method="post" action="./../includes/logout.inc.php">

<fieldset>
  <legend> Deslogar Usuário </legend>
    <div class="botao">
     <button name="logout"> desconectar usuário </button>
    </div>
</fieldset>
 
</body>
</html>
