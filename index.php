<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home - Vagas</title>

  <!-- Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<style type="text/css">

  .card-horizontal {
    display: flex;
    flex: 1 1 auto;
  }

  .foto_vaga{
    width: 280px;
    height: 140px;
    z-index: 1020 !default;
  }

  .botao{
    align-items: right;
  }

  /* Estilo para smartphone */

  @media only screen and (max-width: 787px) {

    .foto_vaga{
      width: 0px;
      height: 0px;
    }

  }

</style>

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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
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

  <!-- Header -->
  <header class="jumbotron my-4">
    <div class="container">
      <h1 class="display-7">Bem vindo ao seu site de vagas de emprego!</h1>
      <p class="lead">Abaixo é possível visualizar as vagas que temos disponíveis em nosso sistema e também cadastrar o seu currículo em nosso banco de dados para que possamos entrar em contato com você.</p>
      <a href="cadastro.php" class="btn btn-primary btn-lg">Cadastre-se aqui!</a>
    </div>
  </header>
  <!-- Final Header -->


  <!-- Vagas -->
  <div class="jumbotron">
    <div class="container">

      <h2>Veja as vagas abaixo:</h2>

      <br/>
      
      <?php

      include "conexao.php";

      $sql = "SELECT * FROM vagas";

      $dados = mysqli_query($conn, $sql);

      while ($linha = mysqli_fetch_assoc($dados)) {
        $id_vaga = $linha['id_vaga'];
        $vaga = $linha['vaga'];
        $atividade = $linha['atividade'];
        $foto = $linha['foto'];

        echo "

        <div class='row'>
        <div class='col'>
        <div class='card'>
        <div class='card-horizontal'>
        <div class='img'>
        <img class='foto_vaga' src='images/$foto' alt=''>
        </div>
        <div class='card-body'>
        <h4 class='card-title'>$vaga</h4>
        <p class='card-text'>$atividade</p>
        </div>
        </div>
        <div class='card-footer text-right'>
        <a class='btn btn-primary' href='cadastro.php'>Cadastre-se</a>
        </div>
        </div>
        </div>
        </div>
        <br>

        ";

      }

      ?>

    </div>
  </div>

  <!-- Final Vagas -->


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