<?php
ini_set('session.save_path', realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));

//Session Start
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysqli_connect("localhost", "user", "password", "database") or die("Sem conexão com o Servidor");

$result = mysqli_query($con, "SELECT * FROM `Usuario` WHERE `NOME` = '$login' AND `SENHA` = '$senha'");

if (mysqli_num_rows($result) > 0) {
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;

  header("location:site.php");
} else {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.html');
}
