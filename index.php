<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script type="text/javascript" src="./areaDeTrabalho/js/alerts.js"></script>
  <link rel="stylesheet" href="./areaDeTrabalho/stylesheets/login.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <title>Infinity Sistem - Login</title>
</head>

<body>
  <div class="container">
    <img src="./areaDeTrabalho/img/logo.png" alt="" title="" onsubmit="return validateForm()">

    <div class="login-box">
      <h2>Login</h2>

      <form method="post" action="ope.php" name="formLogin" onsubmit="return validateForm()">
        <div class="user-box">
          <input type="text" name="login" id="login">
          <label for="login">Nome</label>
        </div>

        <div class="user-box">
          <input type="password" name="senha" id="senha">
          <label for="senha">Senha</label>
        </div>

        <input type="submit" value="Entrar" class="btn-4">

      </form>
    </div>

  </div>
</body>

</html>