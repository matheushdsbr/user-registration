<!DOCTYPE html>
<html lang="en">
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
      <div class="col-md-4 offset-md-4 form-div">
        <form action="signup.php" method="post">
          <h3 class="text-center">Register</h3>

<!--          <div class="form-group">
            <label for="nome">Nome do Responsável</label>
            <input type="text" name="nome" class="form-control nome" placeholder="">
            <span class="span-nome"></span><br><br>
          </div>

          <div class="form-group">
            <label for="empresa">Nome da Empresa</label>
            <input type="text" name="empresa" class="form-control empresa" placeholder="">
            <span class="span-empresa"></span><br><br>
          </div>

          <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" name="cnpj" class="form-control cnpj" placeholder="">
            <span class="span-cnpj"></span><br><br>
          </div>

          <div class="form-group">
            <label for="sitee">Site</label>
            <input type="text" name="sitee" class="form-control sitee" placeholder="">
            <span class="span-sitee"></span><br><br>
          </div>

          <div class="form-group">
            <label for="inscricaoestadual">Inscrição Estadual</label>
            <input type="text" name="inscricaoestadual" class="form-control inscricaoestadual" placeholder="">
            <span class="span-inscricaoestadual"></span><br><br>
          </div>

          <div class="form-group">
            <label for="inscricaomunicipal">Inscrição Municipal</label>
            <input type="text" name="inscricaomunicipal" class="form-control inscricaomunicipal" placeholder="">
            <span class="span-inscricaomunicipal"></span><br><br>
          </div>

          <div class="form-group">
            <label for="crmv">CRMV -Conselho Regional de Medicina Veterinária-</label>
            <input type="text" name="crmv" class="form-control crmv" placeholder="">
            <span class="span-crmv"></span><br><br>
          </div>-->

          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" class="form-control email" placeholder="">
            <span class="span-email"></span>
          </div>

<!--          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control telefone" placeholder="">
            <span class="span-telefone"></span><br><br>
          </div>

          <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" name="cep" class="form-control cep" placeholder="">
            <span class="span-cep"></span><br><br>
          </div>

          <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" name="rua" class="form-control rua" placeholder="">
            <span class="span-rua"></span><br><br>
          </div>

          <div class="form-group">
            <label for="numerocasa">N° da sua residência</label>
            <input type="text" name="numerocasa" class="form-control numerocasa" placeholder="">
            <span class="span-numerocasa"></span><br><br>
          </div>

          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control complemento" placeholder="">
            <span class="span-complemento"></span><br><br>
          </div>

          <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control bairro" placeholder="">
            <span class="span-bairro"></span><br><br>
          </div>

          <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="form-control cidade" placeholder="">
            <span class="span-cidade"></span><br><br>
          </div>

          <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control estado" placeholder="">
            <span class="span-estado"></span><br><br>
          </div>-->

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
            <label for="senhaConf">Confirmar senha</label>
            <input type="password" name="senhaConf" class="form-control password" placeholder="">
            <span class="span-password"></span>
          </div>

          <div class="form-group">
            <input type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg" value="Cadastrar">
          </div>

          <p class="text-center">Lembrou? <a href="login.php">Clique aqui</a> para logar</p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>