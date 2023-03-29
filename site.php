<!DOCTYPE html>
<html lang="pr-br">

<head>
  <meta charset="UTF-8" />
  <title>Sistema Educação</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />
  <link rel="stylesheet" href="./src/css/nav.css" />
  <link rel="stylesheet" href="./src/css/components.css" />

  <script src="https://kit.fontawesome.com/9c3a1d7dec.js" crossorigin="anonymous"></script>

  <?php
  ini_set('session.save_path', realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../tmp'));
  session_start();
  if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    header('location:index.html');
  }
  $logado = $_SESSION['login'];
  ?>

</head>

<body onload="reiniciaPagina();">
  <!-- partial:index.partial.html -->
  <div class="screen">
    <div class="navigation">
      <ul>
        <li>
          <div id="logo"><img src="./src/img/logo.png" alt="" title="" /></div>
        </li>
        <li class="list active" id="nav1">
          <b></b>
          <b></b>
          <a href="#pgInicio">
            <span class="icon"><i class="fa-solid fa-list"></i></span>
            <span class="title">Inicio</span>
          </a>
        </li>
        <li class="list" id="nav2">
          <b></b>
          <b></b>
          <a href="#pg1">
            <span class="icon"><i class="far fa-address-book"></i></span>
            <span class="title">Alunos</span>
          </a>
        </li>
        <li class="list" id="nav3">
          <b></b>
          <b></b>
          <a href="#pg2">
            <span class="icon"><i class="fa-solid fa-chalkboard-user"></i></span>
            <span class="title">Funcionários</span>
          </a>
        </li>
        <li class="list" id="nav4">
          <b></b>
          <b></b>
          <a href="#pg3">
            <span class="icon"><i class="far fa-calendar-alt"></i></span>
            <span class="title">Card 3</span>
          </a>
        </li>
        <li class="list" id="nav5">
          <b></b>
          <b></b>
          <a href="#pg4">
            <span class="icon"><i class="far fa-chart-bar"></i></span>
            <span class="title">Card 4</span>
          </a>
        </li>
        <li class="list" id="nav6">
          <b></b>
          <b></b>
          <a href="#pg5">
            <span class="icon"><i class="fa-solid fa-school"></i></span>
            <span class="title">Card 5</span>
          </a>
        </li>
        <li class="list" id="nav7">
          <b></b>
          <b></b>
          <a href="#pg6">
            <span class="icon"><i class="far fa-bookmark"></i></span>
            <span class="title">Card 6</span>
          </a>
        </li>
        <li class="list" id="nav8">
          <b></b>
          <b></b>
          <a href="#pg7">
            <span class="icon"><i class="far fa-envelope"></i></span>
            <span class="title">Card 7</span>
          </a>
        </li>
        <li class="list" id="nav9">
          <b></b>
          <b></b>
          <a href="#pg8">
            <span class="icon"><i class="far fa-heart"></i></span>
            <span class="title">Card 8</span>
          </a>
        </li>
        <li class="list" id="nav10">
          <b></b>
          <b></b>
          <a href="#pg9">
            <span class="icon"><i class="fa-solid fa-boxes-stacked"></i></span>
            <span class="title">Almoxarifado</span>
          </a>
        </li>
        <li class="list" id="nav11">
          <b></b>
          <b></b>
          <a href="#pgConfig">
            <span class="icon"><i class="fa-solid fa-gears"></i></span>
            <span class="title">Config</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- partial -->

    <div class="toggle">
      <i class="fa-solid fa-bars open"></i>
      <i class="fa-solid fa-xmark close"></i>
    </div>

    <div class="info">

      <!---------------------------------------Section-1--------------------------------------->
      <section id="pgInicio" class="pg">
        <p class="theme">Início</p>

        <div class="card" id="card2">
          <div class="cardTittle">Alunos</div>
          <div class="divIcon"><i class="far fa-address-book"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro Aluno</li>
              <li>Cadastro Responsável</li>
              <li>Cadastro Essenciais</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card3">
          <div class="cardTittle">Funcionários</div>
          <div class="divIcon"><i class="fa-solid fa-chalkboard-user"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro Funcionários</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card4">
          <div class="cardTittle">Card 3</div>
          <div class="divIcon"><i class="far fa-calendar-alt"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card5">
          <div class="cardTittle">Card 4</div>
          <div class="divIcon"><i class="far fa-chart-bar"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card6">
          <div class="cardTittle">Card 5</div>
          <div class="divIcon"><i class="fa-solid fa-school"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card7">
          <div class="cardTittle">Card 6</div>
          <div class="divIcon"><i class="far fa-bookmark"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card8">
          <div class="cardTittle">Card 7</div>
          <div class="divIcon"><i class="far fa-envelope"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card9">
          <div class="cardTittle">Card 8</div>
          <div class="divIcon"><i class="far fa-heart"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card10">
          <div class="cardTittle">Almoxarifado</div>
          <div class="divIcon"><i class="fa-solid fa-boxes-stacked"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card11">
          <div class="cardTittle">Configurações</div>
          <div class="divIcon"><i class="fa-solid fa-gears"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Usuário</li>
            </ul>
          </div>
        </div>
      </section>

      <!---------------------------------------Section-2--------------------------------------->
      <section id="pg1" class="pg">
        <p class="theme">Alunos</p>
        <div class="card">
          <div class="cardTittle">Alunos</div>
          <div class="divIcon"><i class="far fa-address-book"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro Aluno</li>
              <li>Cadastro Responsável</li>
              <li>Cadastro Essenciais</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="cardTittle">Funcionários</div>
          <div class="divIcon"><i class="fa-solid fa-chalkboard-user"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro Funcionários</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="cardTittle">Card 3</div>
          <div class="divIcon"><i class="far fa-calendar-alt"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="cardTittle">Card 4</div>
          <div class="divIcon"><i class="far fa-chart-bar"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="cardTittle">Card 5</div>
          <div class="divIcon"><i class="fa-solid fa-school"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="cardTittle">Card 6</div>
          <div class="divIcon"><i class="far fa-bookmark"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="cardTittle">Card 7</div>
          <div class="divIcon"><i class="far fa-envelope"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="cardTittle">Card 8</div>
          <div class="divIcon"><i class="far fa-heart"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="cardTittle">Almoxarifado</div>
          <div class="divIcon"><i class="fa-solid fa-boxes-stacked"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="cardTittle">Configurações</div>
          <div class="divIcon"><i class="fa-solid fa-gears"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Usuário</li>
            </ul>
          </div>
        </div>
      </section>
      <!---------------------------------------Section-3--------------------------------------->
      <section id="pg2" class="pg">2</section>

      <!---------------------------------------Section-4--------------------------------------->
      <section id="pg3" class="pg">3</section>

      <!---------------------------------------Section-5--------------------------------------->
      <section id="pg4" class="pg">4</section>

      <!---------------------------------------Section-6--------------------------------------->
      <section id="pg5" class="pg">5</section>

      <!---------------------------------------Section-7--------------------------------------->
      <section id="pg6" class="pg">6</section>

      <!---------------------------------------Section-8--------------------------------------->
      <section id="pg7" class="pg">7</section>

      <!---------------------------------------Section-9--------------------------------------->
      <section id="pg8" class="pg">8</section>

      <!---------------------------------------Section-10--------------------------------------->
      <section id="pg9" class="pg">almoxarifado</section>

      <!---------------------------------------Section-11--------------------------------------->
      <section id="pgConfig" class="pg">Config</section>

    </div>



  </div>


  <script src="./src/js/testenav.js"></script>
  <script src="./src/js/cardSelector.js"></script>

  <!--script-- type="module" src="components/lib.js"></!--script-->

</body>

</html>