<?php
 session_start();
 if(!isset($_SESSION['conectado']) OR $_SESSION['conectado'] != true)
  {
  //ERRO: acesso indevido do usuário ao conteúdo restrito. 
  exit("<p> Erro de autenticação. <br>
           <a href='home.php'> Voltar à página HOME </a>       
        </p>");
  }
  ?>