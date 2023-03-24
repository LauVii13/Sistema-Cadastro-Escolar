<!DOCTYPE html>
<html lang="pr-br">

<head>
  <meta charset="UTF-8" />
  <title>CodePen - New Style Dashboard Sidebar With Active Class</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />
  <link rel="stylesheet" href="./src/css/nav.css" />

  <?php
  ini_set('session.save_path', realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));
  session_start();
  if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    header('location:index.html');
  }
  $logado = $_SESSION['login'];
  ?>

</head>

<body>
  <!-- partial:index.partial.html -->
  <div id="accordian">
    <div id="logo"><img src="./src/img/logo.png" alt="" title="" /></div>

    <ul class="show-dropdown main-navbar">
      <div class="selector-active">
        <div class="top"></div>
        <div class="bottom"></div>
      </div>
      <li class="active">
        <a href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Início</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-address-book"></i>Card 1</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-clone"></i>Card 2</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Card 3</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-chart-bar"></i>Card 4</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-copy"></i>Card 5</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-bookmark"></i>Card 6</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-envelope"></i>Card 7</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-heart"></i>Card 8</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-heart"></i>Card 9</a>
      </li>
      <li>
        <a href="javascript:void(0);"><i class="far fa-heart"></i>Configurações</a>
      </li>
    </ul>
  </div>
  <!-- partial -->


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="./src/js/nav.js"></script>
</body>

</html>