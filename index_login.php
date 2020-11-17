<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Área de Colaboradores</title>

  <!-- Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

 <!-- Barra de navegação -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img style="width: 220px;" src="img/logo_sas_white.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Final Barra de Navegação -->

<!-- Jumbotron Login -->

<header class="jumbotron my-4">

  <div class="container">

    <div class="row">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-80">
              <div class="card-body">
                <img class="card-img-top" src="img/template.jpg" alt="">
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="form-group">
                  <h2 class="display col-md-12">Efetue o seu login</h3>
                    <form action="login.php" method="POST">
                      <?php 
                      if(isset($_SESSION['nao_autenticado'])):
                        ?>
                        <p class="notification is-danger">
                          <p>ERRO: Usuário ou senha inválidos.</p>
                        </p>
                        <?php
                      endif;
                      unset($_SESSION['nao_autenticado']);
                      ?>
                      <div class="display col-md-12">
                        <div class="form-group">
                          <input name="usuario" class="form-control" name="text" placeholder="Seu usuário" autofocus="">
                        </div>
                      </div>
                      <div class="display col-md-12">
                        <div class="form-group">
                          <input name="senha" class="form-control" type="password" placeholder="Sua senha">
                        </div>
                      </div>
                      <div class="display col-md-12">
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary" value="Login" />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Final Jumbotron Login -->

      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-left text-white">Copyright &copy; Vagas 2020</p>
        </div>
        <div class="container">
          <a href="login.php" class="btn btn-primary m-0 float-right text-black">
            <svg width="2em" height="2em" viewBox="2 2 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>Área de colaboradores</a>
          </div>
          <br/>
        </footer>
        <!-- Final Footer -->

        <!-- JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      </body>

      </html>
