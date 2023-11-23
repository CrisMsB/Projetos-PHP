<?php
 session_start();
 $login     = $conexao->escape_string(trim($_POST['login']));
 $senha     = $conexao->escape_string(trim($_POST['senha']));

 //neste ponto da validação do login, vamos até o banco buscar a senha que está criptografada
 $sql = "SELECT senha FROM $nomeDaTabela WHERE login='$login'";

 $resultado =  $conexao->query($sql) OR exit($conexao->error);

 $vetorRegistro = $resultado->fetch_array();
 $senhaCriptografada = $vetorRegistro[0];

 $senhaCorreta = password_verify($senha, $senhaCriptografada);

 if($senhaCorreta)
  {
  //as credencias estão corretas. Definimos a variável de sessão
  $_SESSION['conectado'] = true;
  header("location: restrita.php");
  }else{
  echo "<p> Credenciais incorretas. Tente novamente! </p>";
  }
  ?>
  