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
	<header class="jumbotron my-4">
		<div class="container">
			<h1 class="display-8">Bem vindo, <a class="text-capitalize"><?php echo $_SESSION['usuario']; ?>! </a></h1>
			<p class="lead">Abaixo você pode cadastrar, visualizar, editar e excluir os dados das vagas.</p>
			<p class="lead">Você pode escolher o que deseja fazer clicando nos botões da coluna "Funções".</p>
		</div>
	</header>
	<!-- Final Jumbotron Header -->


	<!-- Jumbotron Cadastro de Vagas -->
	<div class="jumbotron my-4">
		<div class="container">
			<h3>Nesta seção você pode cadastrar as vagas.</h3>
			<hr>
			<!-- INICIO Dados da vaga -->
			<h4>Dados da vaga</h4>
			<form action="script_vaga.php" method="POST" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="vaga">Nome da vaga:</label>
						<input type="text" class="form-control" id="vaga" name="vaga" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="atividade">Atividades desempenhadas:</label>
						<textarea type="text" class="form-control" id="atividade" name="atividade" style="height: 200px;"></textarea>
					</div>
				</div>
				<!-- FIM Dados da vaga -->
				<hr>
				<!-- INICIO Imagem da vaga -->
				<h4>Anexar Imagem</h4>
				<div class="form-row">			
					<div class="form-group col-md-6">
						<label for="foto">Imagem:</label>
						<input type="file" class="form-control" id="foto" name="foto" accept="image/*">
					</div>
				</div>
				<!-- FIM Imagem da vaga -->

				<button type="submit" class="btn btn-outline-success btn-sm">
					<svg width="2em" height="2em" viewBox="1 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
					</svg>Salvar
				</button>					
				<a href="cadastro_vagas.php" class="btn btn-outline-danger btn-sm">
					<svg width="2em" height="2em" viewBox="1 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
					</svg>Cancelar</a>
				</form>
			</div>
		</div>
		<!-- Final Jumbotron Cadastro de Vagas -->



		<?php

		$pesquisa = $_POST['busca'] ?? '';


		include "conexao.php";

		$sql = "SELECT * FROM vagas WHERE vaga LIKE '%$pesquisa%'";

		$dados = mysqli_query($conn, $sql);

		?>

		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Pesquisar</h2>
					<div class="navbar navbar-light bg-light">
						<form class="form-inline" action="#" method="POST" focus>
							<input class="form-control mr-sm-2" type="search" placeholder="Vaga..." aria-label="Pesquisar" name="busca">
							<button class="btn btn-primary my-2 my-sm-0" type="submit">Pesquisar</button>
						</form>
					</div>
					<div class="table-responsive" style="font-size: 14px;">
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">Vaga</th>
									<th scope="col">Atividades principais</th>
									<th scope="col">Funções</th>
								</tr>
							</thead>
							<tbody>

								<?php

								while ($linha = mysqli_fetch_assoc($dados)) {
									$id_vaga = $linha['id_vaga'];
									$vaga = $linha['vaga'];
									$atividade = $linha['atividade'];
									$imagem = $linha['foto'];

									echo "
									<tr>
									<th scope='row' width='100px'>$vaga</th>
									<td>$atividade</td>
									<td width='130px'>

									<a href='ver_vagas.php?id=$id_vaga' class='btn btn-outline-success btn-sm'>
									<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-eye-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
									<path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
									<path fill-rule='evenodd' d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
									</svg></a>

									<a href='altera_vagas.php?id=$id_vaga' class='btn btn-outline-dark btn-sm'>
									<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
									<path fill-rule='evenodd' d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
									</svg></a>

									<a href='excluir_vagas.php' class='btn btn-outline-danger btn-sm' data-toggle='modal' data-target='#confirma' 
									onclick=" .'"' ."pegar_dados($id_vaga, '$vaga')" .'"' ."><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
									<path fill-rule='evenodd' d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z'/>
									</svg></a>

									</td>
									</tr>
									";
								}

								?>

								<!-- onclick = "pegar_dados($id, '$nome')"  -->

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="excluir_vagas.php" method="POST">
							<p>Deseja realmente excluir <b id="nome_vaga">Nome da pessoa</b>?</p>						
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Não</button>
							<input type="hidden" name="vaga" id="nome_vaga_1" value="">
							<input type="hidden" name="id" id="cod_vaga" value="">
							<input type="submit" class="btn btn-outline-success" value="Sim">
						</form>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			function pegar_dados(id, vaga){
				document.getElementById('nome_vaga').innerHTML = vaga;
				document.getElementById('nome_vaga_1').value = vaga;
				document.getElementById('cod_vaga').value = id;
			}
		</script>

		<br/>

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