<?php
session_start();

if (!isset($_SESSION["id"])) {
  header("Location: loginout.php");
  exit;
}


if (isset($_REQUEST["logout"]) && $_REQUEST["logout"] == true) {
  sleep(2);
  session_destroy();
  header("Location: index.php");
  exit;
}

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
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ZWP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=atualizar">Atualizar infos</a></li>
            <li><a class="dropdown-item" href="?page=excluir">Deletar usuario</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?logout=true">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>







<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php
    switch(@$_REQUEST["page"]){
      case "excluir": include("./CRUD/P_delete.php"); break;
      case "atualizar": include("./CRUD/P_update.php");break;
      default: echo "Bem-vindo, " . $_SESSION["nome"] . "!"; break;
    }
  ?>
    </div>
  </div>
</div>


    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>