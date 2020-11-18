<?php 
include "verifica_login.php";
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

<?php

include "conexao.php";

$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

$dados = mysqli_query($conn, $sql);
$linha = mysqli_fetch_assoc($dados);

$disp_viagens = $linha['disp_viagens'];
$disp_mudancas = $linha['disp_mudancas'];
$curriculo = $linha['curriculo'];

?>

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
			<p class="lead">Abaixo você pode visualizar os dados do candidato <b><a class="text-capitalize"> <?php echo $linha['nome']; ?>! </a></b> </p>
		</div>
	</header>
	<!-- Final Jumbotron Header -->

	
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Visualizar Cadastro</h1>
				<form method="POST">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nome">Nome completo:</label>
							<input type="text" class="form-control" name="nome" value="<?php echo $linha['nome']; ?>" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="endereco">Endereço:</label>
							<input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="telefone">Telefone:</label>
							<input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">E-mail:</label>
							<input type="email" class="form-control" name="email" value="<?php echo $linha['email']; ?>" disabled>
						</div>		
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="cpf">CPF:</label>
							<input type="text" class="form-control" name="cpf" value="<?php echo $linha['cpf']; ?>" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="data_nascimento">Data de nascimento:</label>
							<input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>" disabled>
						</div>	
						<div class="form-group col-md-2">
							<label for="sexo">Sexo:</label>
							<select class="form-control" name="sexo" id="sexo">
								<option><?php echo $linha['sexo']; ?></option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="estado_civil">Estado Civil:</label>
							<select class="form-control" name="estado_civil" id="estado_civil">
								<option><?php echo $linha['estado_civil']; ?></option>
							</select>
						</div>
					</div>

					<!-- TESTE -->

					<hr>

					<!-- INICIO Formação acadêmica -->
					<h4>Formação Acadêmica</h4>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="grau">Grau de escolaridade:</label>
							<select class="form-control" name="grau" id="grau">
								<option><?php echo $linha['grau']; ?></option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="estado_conclusao">Estado:</label>
							<select class="form-control" name="estado_conclusao" id="estado_conclusao">
								<option><?php echo $linha['estado_conclusao']; ?></option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="data_conclusao">Data de conclusão:</label>
							<input type="date" class="form-control" id="data_conclusao" name="data_conclusao" value="<?php echo $linha['data_conclusao']; ?>" disabled>
						</div>
					</div>
					<div class="form-row">	
						<div class="form-group col-md-6">
							<label for="escola">Nome da escola:</label>
							<input type="text" class="form-control" id="escola" name="escola" value="<?php echo $linha['escola']; ?>" disabled>
						</div>					
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="curso">Nome do curso:</label>
							<input type="text" class="form-control" id="curso" name="curso" value="<?php echo $linha['curso']; ?>" disabled>
						</div>
					</div>

					<!-- FIM Formação acadêmica -->

					<hr>

					<!-- INICIO Dados profissionais -->
					<h4>Dados Profissionais</h4>

					<div class="form-row" id="experiencia">	
						<div class="form-group col-md-6">
							<label for="empresa">Nome da empresa:</label>
							<input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo $linha['empresa']; ?>" disabled>
						</div>					
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="cargo">Cargo:</label>
							<input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $linha['cargo']; ?>" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="data_inicio">Data de início:</label>
							<input type="date" class="form-control" id="data_inicio" name="data_inicio" value="<?php echo $linha['data_inicio']; ?>" disabled>
						</div>
						<div class="form-group col-md-3">
							<label for="data_final">Data de saída:</label>
							<input type="date" class="form-control" id="data_final" name="data_final" value="<?php echo $linha['data_final']; ?>" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="atividades">Atividades desempenhadas:</label>
							<textarea type="text" class="form-control" id="atividades" name="atividades" disabled><?php echo $linha['atividades']; ?></textarea>
						</div>
					</div>

					<!-- FIM Dados profissionais -->

					<hr>

					<!-- INICIO Informações complementares -->
					<h4>Informações Complementares</h4>
					<div class="form-row">			
						<div class="col-md-3">
							<label for="disp_viagens">Disponipilidade para viagens:</label>
						</br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="disp_viagens" id="disp_viagens" value="Yes" <?= $disp_viagens == "Yes" ? 'checked="true"' : ''; ?> disabled>
							<label class="form-check-label" for="disp_viagens">
								Sim
							</label>  
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="disp_viagens" id="disp_viagens" value="No" <?= $disp_viagens == "No" ? 'checked="true"' : ''; ?> disabled>
							<label class="form-check-label" for="disp_viagens">
								Não
							</label>  
						</div>
					</div>					
					<div class="col-md-3">
						<label for="disp_mudancas">Disponipilidade para mudanças:</label>
					</br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="disp_mudancas" id="disp_mudancas" value="Yes" <?= $disp_mudancas == "Yes" ? 'checked="true"' : ''; ?> disabled>
						<label class="form-check-label" for="disp_mudancas">
							Sim
						</label>  
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="disp_mudancas" id="disp_mudancas" value="No" <?= $disp_mudancas == "No" ? 'checked="true"' : ''; ?> disabled>
						<label class="form-check-label" for="disp_mudancas">
							Não
						</label>  
					</div>
				</div>
			</div>
			<br>

			<div class="form-row">
				<div class="form-group col-md-2">
					<label for="pretensao">Pretensão salarial:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="pretensao">R$</span>
						</div>
						<input type="number" class="dinheiro form-control" onkeypress="$(this).mask('0000.00');" id="pretensao" name="pretensao" value="<?php echo $linha['pretensao']; ?>" disabled>
					</div>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="vaga_pretendida">Vaga pretendida:</label>
					<select class="form-control" name="vaga_pretendida" id="vaga_pretendida">
						<option><?php echo $linha['vaga_pretendida']; ?></option>
					</select>
				</div>
			</div>

			<!-- FIM Informações complementares -->

			<a href="<?php echo"pdf/$curriculo" ?>" class="btn btn-outline-success" target="_blank">
			<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-file-earmark-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  		<path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0H4zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
			</svg> Visualizar Curriculo em PDF</a>

		</form>
		<br>
		<a href="pesquisa.php" class="btn btn-outline-primary">
		<svg width="22px" height="22px" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  	<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  	<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
		</svg> Voltar para o início</a>
	</div>
</div>
</div>

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