<?php 
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Cadastro - Vagas</title>

	<!-- Bootstrap -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/heroic-features.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">

</head>

<body>

	<!-- Barra de navegação -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand">
			<img style="width: 220px;" src="img/logo_sas_white.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="pesquisa.php">Candidatos
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="cadastro_vagas.php">Vagas
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="btn-group">
						<button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<svg width="20px" height="20px" viewBox="2 2 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg>
							<?php echo $_SESSION['usuario']; ?>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="logout.php">Sair</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Final Barra de Navegação -->

	<!-- Jumbotron Header -->
	
	<?php

	include "conexao.php";

	$id = $_GET['id'] ?? '';

	$sql = "SELECT * FROM vagas WHERE id_vaga = $id";

	$dados = mysqli_query($conn, $sql);
	$linha = mysqli_fetch_assoc($dados);
	?>

	<!-- Jumbotron Header -->
	<header class="jumbotron my-4">
		<div class="container">
			<h1 class="display-8">Bem vindo, <a class="text-capitalize"><?php echo $_SESSION['usuario']; ?>! </a></h1>
			<p class="lead">Abaixo você pode alterar os dados da vaga <b><a class="text-capitalize"> <?php echo $linha['vaga']; ?>! </a></b></p>
		</div>
	</header>	
	<!-- Final Jumbotron Header -->

	<!-- INICIO Dados da vaga -->
	<header class="jumbotron my-4">
		<div class="container">
			<h4>Dados da vaga</h4>
			<form action="edit_vagas.php" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="vaga">Nome da vaga:</label>
						<input type="text" class="form-control" id="vaga" name="vaga" value="<?php echo $linha['vaga']; ?>" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="atividade">Atividades desempenhadas:</label>
						<textarea type="text" class="form-control" id="atividade" name="atividade" style="height: 200px;"><?php echo $linha['atividade']; ?></textarea>
					</div>
				</div>
				<!-- FIM Dados da vaga -->


				<button type="submit" class="btn btn-outline-success">
					<input type="hidden" name="id" value="<?php echo $linha['id_vaga']; ?>">
					<svg width="20px" height="20px" viewBox="1 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
					</svg>Salvar
				</button>

				<a href="cadastro_vagas.php" class="btn btn-outline-danger">
					<svg width="20px" height="20px" viewBox="1 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
					</svg>Cancelar</a>

					<!-- <div class="form-group">
						<input type="submit" class="btn btn-success" value="Salvar Alterações">
						<input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
					</div> -->
				</form>
			</div>
		</div>
	</div>
</header>
<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-left text-white">Copyright &copy; Vagas 2020</p>
	</div>
	<br/>
</footer>
<!-- Final Footer -->

<!-- JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/validator.min.js"></script>

</body>

</html>
