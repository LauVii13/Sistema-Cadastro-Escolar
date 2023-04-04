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
  //verificação de login
  if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    session_destroy();
    header('location:index.html');
  }

  $logado = $_SESSION['login'];
  $admin = $_SESSION['admin'];
  $list_permissions = $_SESSION['list_permissions']
  ?>

</head>

<body id="<?php echo ($admin); ?>" onload="ManageElements();">
  <!--onload="MudarEstado('logo');"-->
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
            <span class="icon"><i class="fa-solid fa-address-book"></i></span>
            <span class="title">Cadastrar</span>
          </a>
        </li>
        <li class="list" id="nav3">
          <b></b>
          <b></b>
          <a href="#pg2">
            <span class="icon"><i class="fa-solid fa-chalkboard-user"></i></span>
            <span class="title">Acadêmico</span>
          </a>
        </li>
        <li class="list" id="nav4">
          <b></b>
          <b></b>
          <a href="#pg3">
            <span class="icon"><i class="fa-solid fa-bookmark"></i></span>
            <span class="title">Gerenciar</span>
          </a>
        </li>
        <li class="list" id="nav5">
          <b></b>
          <b></b>
          <a href="#pg4">
            <span class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></span>
            <span class="title">Ferramentas</span>
          </a>
        </li>
        <li class="list" id="nav6">
          <b></b>
          <b></b>
          <a href="#pg5">
            <span class="icon"><i class="fa-solid fa-circle-info"></i></span>
            <span class="title">Essenciais</span>
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
            <span class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></span>
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
        <p class="theme">Início</p>

        <div class="card" id="card2">
          <div class="cardTittle">Cadastrar</div>
          <div class="divIcon"><i class="fa-solid fa-address-book"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Unidade Escolar</li>
              <li>Unidade de Apoio</li>
              <li>Funcionários</li>
              <li>Alunos</li>
              <li>Parâmetros Acadêmicos</li>
              <li>Central de Vagas</li>
              <li>Remoção / Atribuição</li>
              <li>Avaliações Funcionais</li>
              <li>Colaborador</li>
              <li>Empresa</li>
              <li>Tipo de Recurso</li>
              <li>Almoxarifado</li>
              <li>Merenda</li>
              <li>Patrimônio</li>
              <li>Protocolo</li>
              <li>Transporte</li>

            </ul>
          </div>
        </div>
        <div class="card" id="card3">
          <div class="cardTittle">Acadêmico</div>
          <div class="divIcon"><i class="fa-solid fa-chalkboard-user"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Funcionais</li>
              <li>Remoção / Atribuição</li>
              <li>Vagas Disponíveis</li>
              <li>Processamento de Vagas</li>
              <li>Vagas Remanescentes</li>
              <li>Setorizar Alunos</li>
              <li>Matrícula</li>
              <li>Transporte de Alunos</li>
              <li>Classe</li>
              <li>Componentes Curriculares</li>
              <li>Grade Curricular</li>
              <li>Diário de Classe</li>
              <li>Rendimentos</li>
              <li>Diários de Unidade</li>
              <li>Inteligência Acadêmica</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card4">
          <div class="cardTittle">Gerenciar</div>
          <div class="divIcon"><i class="fa-solid fa-bookmark"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Vincular Empresa</li>
              <li>Almoxarifado</li>
              <li>Patrimônio</li>
              <li>Protocolo</li>
              <li>Transporte</li>
              <li>Organizador de Trabalho</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card5">
          <div class="cardTittle">Ferramentas</div>
          <div class="divIcon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Comunicador</li>
              <li>Backup</li>
              <li>Histórico do Sistem</li>
              <li>Excluir Frequência</li>
              <li>Alterar Ano Letivo</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card6">
          <div class="cardTittle">Essenciais</div>
          <div class="divIcon"><i class="fa-solid fa-circle-info"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastrar Essenciais</li>
            </ul>
          </div>
        </div>
        <div class="card" id="card7">
          <div class="cardTittle"></div>
          <div class="divIcon"><i class="far fa-bookmark"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li></li>
            </ul>
          </div>
        </div>
        <div class="card" id="card8">
          <div class="cardTittle"></div>
          <div class="divIcon"><i class="far fa-envelope"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li></li>
            </ul>
          </div>
        </div>
        <div class="card" id="card9">
          <div class="cardTittle"></div>
          <div class="divIcon"><i class="far fa-heart"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li></li>
            </ul>
          </div>
        </div>
        <div class="card" id="card10">
          <div class="cardTittle"></div>
          <div class="divIcon"><i class="fa-solid fa-boxes-stacked"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li></li>
            </ul>
          </div>
        </div>
        <div class="card" id="card11">
          <div class="cardTittle">Configurações</div>
          <div class="divIcon"><i class="fa-solid fa-gears"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Usuário</li>
              <li>Sistema</li>
              <li>Configurações Gerais</li>
            </ul>
          </div>
        </div>
      </section>

      <!---------------------------------------Section-2--------------------------------------->
      <section id="pg1" class="pg">
        <p class="theme">Cadastro</p>

        <div class="card subcard" id="subCard2">
          <div class="cardTittle">Cadastrar</div>
          <div class="divIcon"><i class="fa-solid fa-address-book"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li><a href="./src/php/forms1.php">Cadastro Aluno</a></li>
              <li>Cadastro Responsável</li>
              <li>Atualizar Cadastro</li>
              <li>Cadastro Essenciais</li>
            </ul>
          </div>
        </div>
      </section>

      <!---------------------------------------Section-3--------------------------------------->
      <section id="pg2" class="pg">
        <p class="theme">Acadêmico</p>

        <div class="card subcard" id="subcard3">
          <div class="cardTittle">Acadêmico</div>
          <div class="divIcon"><i class="fa-solid fa-chalkboard-user"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li></li>
            </ul>
          </div>
        </div>

      </section>

      <!---------------------------------------Section-4--------------------------------------->
      <section id="pg3" class="pg">
        <p class="theme">Gerenciar</p>

        <div class="card subcard" id="subcard4">
          <div class="cardTittle">Gerenciar</div>
          <div class="divIcon"><i class="fa-solid fa-bookmark"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>

      </section>

      <!---------------------------------------Section-5--------------------------------------->
      <section id="pg4" class="pg">
        <p class="theme">Ferramentas</p>

        <div class="card subcard" id="subcard5">
          <div class="cardTittle">Ferramentas</div>
          <div class="divIcon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>

      </section>

      <!---------------------------------------Section-6--------------------------------------->
      <section id="pg5" class="pg">
        <p class="theme">Essenciais</p>

        <div class="card subcard" id="subcard6">
          <div class="cardTittle">Essenciais</div>
          <div class="divIcon"><i class="fa-solid fa-circle-info"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro</li>
            </ul>
          </div>
        </div>

      </section>

      <!---------------------------------------Section-7--------------------------------------->
      <section id="pg6" class="pg">
        <p class="theme">Configurações</p>

        <div class="card subcard" id="subcard7">
          <div class="cardTittle">Alunos</div>
          <div class="divIcon"><i class="far fa-address-book"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro Aluno</li>
              <li>Cadastro Responsável</li>
              <li>Atualizar Cadastro</li>
              <li>Cadastro Essenciais</li>
            </ul>
          </div>
        </div>

      </section>

      <!---------------------------------------Section-8--------------------------------------->
      <section id="pg7" class="pg">
        <p class="theme">Início</p>

        <div class="card" subcard id="subcard8">
          <div class="cardTittle">Alunos</div>
          <div class="divIcon"><i class="far fa-address-book"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro Aluno</li>
              <li>Cadastro Responsável</li>
              <li>Atualizar Cadastro</li>
              <li>Cadastro Essenciais</li>
            </ul>
          </div>
        </div>

      </section>

      <!---------------------------------------Section-9--------------------------------------->
      <section id="pg8" class="pg">
        <p class="theme">Início</p>

        <div class="card subcard" id="subcard9">
          <div class="cardTittle">Alunos</div>
          <div class="divIcon"><i class="far fa-address-book"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro Aluno</li>
              <li>Cadastro Responsável</li>
              <li>Atualizar Cadastro</li>
              <li>Cadastro Essenciais</li>
            </ul>
          </div>
        </div>
        <?php echo ($list_permissions); ?>
      </section>

      <!---------------------------------------Section-10--------------------------------------->
      <section id="pg9" class="pg">
        <p class="theme">Início</p>

        <div class="card subcard" id="subcard10">
          <div class="cardTittle">Alunos</div>
          <div class="divIcon"><i class="far fa-address-book"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Cadastro Aluno</li>
              <li>Cadastro Responsável</li>
              <li>Atualizar Cadastro</li>
              <li>Cadastro Essenciais</li>
            </ul>
          </div>
        </div>

      </section>

      <!---------------------------------------Section-11--------------------------------------->
      <section id="pgConfig" class="pg">
        <p class="theme">Configurações</p>

        <div class="card subcard" id="subcard11">
          <div class="cardTittle">Configurações</div>
          <div class="divIcon"><i class="fa-solid fa-gears"></i></div>
          <div class="divList">
            <ul class="cardList">
              <li>Usuário</li>
              <li>Gerar Relatório</li>
              <li>Sistema</li>
            </ul>
          </div>
        </div>

      </section>

    </div>

    <!--------------------------------------Section-Finished-------------------------------------->

  </div>


  <script src="./src/js/testenav.js"></script>
  <script src="./src/js/cardSelector.js"></script>
  <script src="./src/js/manageElements.js"></script>

  <!--script-- type="module" src="components/lib.js"></!--script-->

</body>

</html>