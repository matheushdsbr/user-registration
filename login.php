<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Register</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-div login">
        <form action="login.php" method="post">

          <!--<div class="alert alert-danger">
            <li>Digite seu E-mail</li>
            <li>Digite seu Usuario</li>
            <li>Digite sua Senha</li>
          </div>-->

          <h3 class="text-center">Login</h3>

          <div class="form-group">
            <label for="usuario">Login</label>
            <input type="text" name="usuario" class="form-control form-control-lg usuario" placeholder="">
            <span class="span-usuario"></span>
          </div>

          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control password" placeholder="">
            <span class="span-password"></span>
          </div>

          <div class="form-group">
            <input type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg" value="Login">
          </div>

          <p class="text-center"><a href="login.php">Clique aqui</a> para se cadastrar</p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>