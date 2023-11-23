<?php
session_start();
//excluimos a sessão
$_SESSION=[];
session_destroy();
header("location: ./../php/home.php");
?>