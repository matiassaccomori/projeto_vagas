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
					<li class="nav-item active">
						<a class="nav-link" href="pesquisa.php">Candidatos
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cadastro_vagas.php">Vagas
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
			<p class="lead">Abaixo você pode visualizar, editar e excluir os dados dos candidatos cadastrados.</p>
			<p class="lead">Você pode escolher o que deseja fazer clicando nos botões da coluna "Funções".</p>
		</div>
	</header>
	<!-- Final Jumbotron Header -->

	<?php

	$pesquisa = $_POST['busca'] ?? '';

	include "conexao.php";

	$sql = "SELECT * FROM pessoas WHERE vaga_pretendida LIKE '%$pesquisa%'";

	$dados = mysqli_query($conn, $sql);

	?>

	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Pesquisar</h2>
				<div class="navbar navbar-light bg-light">
					<form class="form-inline" action="pesquisa.php" method="POST">
						<input class="form-control mr-sm-2" type="search" placeholder="Vaga pretendida..." aria-label="Pesquisar" name="busca">
						<button class="btn btn-primary my-2 my-sm-0" type="submit">Pesquisar</button>
					</form>
				</div>
				<div class="table-responsive" style="font-size: 14px;">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Endereço</th>
								<th scope="col">Telefone</th>
								<th scope="col">E-mail</th>
								<th scope="col">Data de Nascimento</th>
								<th scope="col">Vaga Pretendida</th>
								<th scope="col">Funções</th>
							</tr>
						</thead>
						<tbody>

							<?php

							while ($linha = mysqli_fetch_assoc($dados)) {
								$cod_pessoa = $linha['cod_pessoa'];
								$nome = $linha['nome'];
								$endereco = $linha['endereco'];
								$telefone = $linha['telefone'];
								$email = $linha['email'];
								$data_nascimento = $linha['data_nascimento'];
								$data_nascimento = mostra_data($data_nascimento);
								$vaga_pretendida = $linha['vaga_pretendida'];
								$curriculo = $linha['curriculo'];

								if (!$curriculo == null) {
									$mostra_curriculo = "Currículo carregado com sucesso.";
								}
								else {
									$mostra_curriculo = '';
								}

								echo "
								<tr>
								<th scope='row'>$nome</th>
								<td>$endereco</td>
								<td>$telefone</td>
								<td>$email</td>
								<td>$data_nascimento</td>
								<td>$vaga_pretendida</td>
								<td width='150px'>
								<a href='cadastro_ver.php?id=$cod_pessoa' class='btn btn-outline-success btn-sm'>

								<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-eye-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
								<path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
								<path fill-rule='evenodd' d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
								</svg></a>

								<a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-outline-dark btn-sm'>
								<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
								<path fill-rule='evenodd' d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
								</svg></a>

								<a href='cadastro_edit.php' class='btn btn-outline-danger btn-sm' data-toggle='modal' data-target='#confirma' 
								onclick=" .'"' ."pegar_dados($cod_pessoa, '$nome')" .'"' ."><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
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
					<form action="excluir_script.php" method="POST">
						<p>Deseja realmente excluir <b id="nome_pessoa">Nome da pessoa</b>?</p>						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Não</button>
						<input type="hidden" name="nome" id="nome_pessoa_1" value="">
						<input type="hidden" name="id" id="cod_pessoa" value="">
						<input type="submit" class="btn btn-outline-success" value="Sim">
					</form>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function pegar_dados(id, nome){
			document.getElementById('nome_pessoa').innerHTML = nome;
			document.getElementById('nome_pessoa_1').value = nome;
			document.getElementById('cod_pessoa').value = id;
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