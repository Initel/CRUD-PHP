<?php
    include("./CRUD/Funcoes/loginout.php");
?>

<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>


    <!-- Formulário de login -->
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="col-md-4 bg-light p-4 rounded">
        <h1 class="text-center">Login</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="form-horizontal">
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-10">
              <input type="email" id="email" name="email" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="senha" class="col-sm-2 control-label mt-2">Senha:</label>
            <div class="col-sm-10">
              <input type="password" id="senha" name="senha" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="login" value="Login" class="btn btn-primary mt-3">
            </div>
          </div>
        </form>
      </div>
    </div>


    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>