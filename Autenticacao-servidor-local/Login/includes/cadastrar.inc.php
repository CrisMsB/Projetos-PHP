<?php
 $nome      = $conexao->escape_string(trim($_POST['nome']));
 $email     = $conexao->escape_string(trim($_POST['email']));
 $login     = $conexao->escape_string(trim($_POST['login']));
 $senha     = $conexao->escape_string(trim($_POST['senha']));

 //vamos criptografar a senha, antes de enviá-la para o banco de dados
 $senhaCriptografada = password_hash($senha, PASSWORD_ARGON2I);

 $sql = "INSERT $nomeDaTabela VALUES(
                   null,
                   '$nome', 
                   '$email',
                   '$login',
                   '$senhaCriptografada')";

 $conexao->query($sql) OR die($conexao->error);

 //para que nossa aplicação sempre garanta que o usuário, antes de acessar o conteúdo restrito, tenha que passar pelo login ou pelo cadastro, criaremos a variávle de sessão abaixo
 session_start();
 $_SESSION['conectado'] = true;


 //o cadastro do usuário já foi efetuado. Vamos redirecioná-lo para a página de acesso restrito
 header("location: restrita.php");

 