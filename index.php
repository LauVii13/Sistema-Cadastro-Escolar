<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="./areaDeTrabalho/stylesheets/login.css">
  <title>Infinity Sistem - Login</title>
</head>
<body>
  <div class="container">
    <form method="post" action="ope.php">
      <fieldset id="fie">
        <legend>Login</legend>
        <br>
        <label for="login">Nome</label>
        <br>
        <input type="text" name = "login" id="login">
        <br><br>

        <label for="senha">Senha</label>
        <br>
        <input type="password" name="senha" id="senha">

        <input type="submit" value="Entrar">

        <br><br>
      </fieldset>
    </form>
  </div>
</body>
</html>