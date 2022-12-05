<?php

require_once("config.inc.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$idd++;
$insert = "INSERT INTO users (username,pass,id) VALUES ('$nome','$senha','$idd')";
mysqli_query($con, $insert);
setcookie('cadastro',"Cadastro feito com sucesso!");
header('Location: index.php?pg=cadastro');