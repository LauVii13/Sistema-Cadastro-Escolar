<!DOCTYPE html>
<html lang="pr-br">

<head>
  <meta charset="UTF-8" />
  <title>Sistema Educação</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />
  <link rel="stylesheet" href="../css/nav.css" />
  <link rel="stylesheet" href="../css/components.css" />
  <link rel="stylesheet" href="../css/forms.css">

  <script src="https://kit.fontawesome.com/9c3a1d7dec.js" crossorigin="anonymous"></script>

  <?php
  ini_set('session.save_path', realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));
  session_start();
  //verificação de login
  if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    session_destroy();
    header('location:../../index.html');
  }

  $logado = $_SESSION['login'];
  $admin = $_SESSION['admin'];

  ?>

</head>

<body id="<?php echo ($admin); ?>" onload="ManageElements();">
  <!--onload="MudarEstado('logo');"-->
  <!-- partial:index.partial.html -->
  <div class="screen">
    <div class="navigation">
      <ul>
        <li>
          <div id="logo"><img src="../img/logo.png" alt="" title="" /></div>
        </li>
        <li class="list" id="nav1">
          <b></b>
          <b></b>
          <a href="../../site.php#pgInicio">
            <span class="icon"><i class="fa-solid fa-list"></i></span>
            <span class="title">Inicio</span>
          </a>
        </li>
        <li class="list active" id="nav2">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="fa-solid fa-address-book"></i></span>
            <span class="title">Cadastrar</span>
          </a>
        </li>
        <li class="list disable" id="nav3">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="fa-solid fa-chalkboard-user"></i></span>
            <span class="title">Acadêmico</span>
          </a>
        </li>
        <li class="list disable" id="nav4">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="fa-solid fa-bookmark"></i></span>
            <span class="title">Gerenciar</span>
          </a>
        </li>
        <li class="list disable" id="nav5">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></span>
            <span class="title">Ferramentas</span>
          </a>
        </li>
        <li class="list disable" id="nav6">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="fa-solid fa-circle-info"></i></span>
            <span class="title">Essenciais</span>
          </a>
        </li>
        <li class="list disable" id="nav7">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="far fa-bookmark"></i></span>
            <span class="title">Card 6</span>
          </a>
        </li>
        <li class="list disable" id="nav8">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></span>
            <span class="title">Card 7</span>
          </a>
        </li>
        <li class="list disable" id="nav9">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="far fa-heart"></i></span>
            <span class="title">Card 8</span>
          </a>
        </li>
        <li class="list disable" id="nav10">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="fa-solid fa-boxes-stacked"></i></span>
            <span class="title">Almoxarifado</span>
          </a>
        </li>
        <li class="list disable" id="nav11">
          <b></b>
          <b></b>
          <a href="">
            <span class="icon"><i class="fa-solid fa-gears"></i></span>
            <span class="title">Configurações</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- partial -->

    <div class="toggle">
      <i class="fa-solid fa-bars open"></i>
      <i class="fa-solid fa-xmark close"></i>
    </div>

    <div class="whatsapp">
      <a href="https://wa.me/55xxxxxxxx" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
    </div>

    <div class="info">

      <!---------------------------------------Section-1--------------------------------------->
      <section id="pgInicio" class="pg">
        <p class="theme">Titulo Forms</p>





      </section>

      <!---------------------------------------Section-2--------------------------------------->
      <section id="" class="">

      </section>
    </div>
  </div>



  </div>

  <!--------------------------------------Section-Finished-------------------------------------->

  </div>





  <script src="../js/testenav.js"></script>
  <script src="../js/cardSelector.js"></script>
  <script src="../js/manageElements.js"></script>

</body>

</html>