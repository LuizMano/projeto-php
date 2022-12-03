<?php

require_once("config.inc.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$insert = "INSERT INTO users (username,pass) VALUES ('$nome','$senha')";
mysqli_query($con, $insert);
header('Location: index.php?pg=login');