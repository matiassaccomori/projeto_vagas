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

	<title>Área de Colaboradores</title>

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
					<li class="nav-item active">
						<a class="nav-link" href="pesquisa.php">Visualizar cadastros
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
	<header class="jumbotron my-4">
		<div class="container">
			<?php 
			include "conexao.php";

			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$endereco = $_POST['endereco'];
			$telefone = $_POST['telefone'];
			$cpf = $_POST['cpf'];
			$email = $_POST['email'];
			$data_nascimento = $_POST['data_nascimento'];
			$sexo = $_POST['sexo'];
			$estado_civil = $_POST['estado_civil'];
			$grau =$_POST['grau'];
			$estado_conclusao = $_POST['estado_conclusao'];
			$data_conclusao = $_POST['data_conclusao'];
			$escola = $_POST['escola'];
			$curso = $_POST['curso'];
			$empresa = $_POST['empresa'];
			$cargo = $_POST['cargo'];
			$data_inicio = $_POST['data_inicio'];
			$data_final = $_POST['data_final'];
			$atividades = $_POST['atividades'];
			$disp_viagens = $_POST['disp_viagens'];
			$disp_mudancas = $_POST['disp_mudancas'];
			$pretensao = $_POST['pretensao'];
			$vaga_pretendida = $_POST['vaga_pretendida'];

			// $sql = "INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";

			$sql = "UPDATE `pessoas` set  `nome` = '$nome', `endereco` = '$endereco', `cpf` = '$cpf', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento', `sexo` = '$sexo', `estado_civil` = '$estado_civil', `grau` = '$grau', `estado_conclusao` = '$estado_conclusao', `data_conclusao` = '$data_conclusao', `escola` = '$escola', `curso` = '$curso', `empresa` = '$empresa', `cargo`= '$cargo', `data_inicio` = '$data_inicio', `data_final` = '$data_final', `atividades` = '$atividades', `disp_viagens` = '$disp_viagens', `disp_mudancas` = '$disp_mudancas', `pretensao` = '$pretensao', `vaga_pretendida` = '$vaga_pretendida' WHERE cod_pessoa = '$id'";

			if (mysqli_query($conn, $sql)) {

				echo "<h2 class='display-6' style='color: #02a636'><svg width='2em' height='2em' viewBox='0 0 16 16' class='bi bi-check-circle' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
				<path fill-rule='evenodd' d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
				<path fill-rule='evenodd' d='M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z'/>
				</svg> Sucesso</h2>";
				echo "\n";
				echo "<h3 class='display-6'>Os dados do candidato $nome, foram alterados!</h3>";
			}
			else{
				echo "<h2 class='display-6' style='color: #e60000'><svg width='2em' height='2em' viewBox='0 0 16 16' class='bi bi-x-circle' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
				<path fill-rule='evenodd' d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
				<path fill-rule='evenodd' d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
				</svg> Erro</h2>";
				echo "\n";
				echo "<h3 class='display-6'>Os dados do candidato $nome, não foram alterados!</h3>";
			}
			?>
			
		</div>
		<br>
		<div class="container">
			<div class="row">
				<a href="pesquisa.php" class="btn btn-primary">Voltar</a>
			</div>
		</div>
	</div>
</header>

<!-- Final Jumbotron Header -->


<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-left text-white">Copyright &copy; Vagas 2020</p>
	</div>
</footer>

<!-- Final Footer -->

<!-- JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
