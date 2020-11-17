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

	<!-- Estilos personalizados para este template -->
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

	<?php

	include "conexao.php";

	$id = $_GET['id'] ?? '';
	$sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

	$dados = mysqli_query($conn, $sql);
	$linha = mysqli_fetch_assoc($dados);

	$disp_viagens = $linha['disp_viagens'];
	$disp_mudancas = $linha['disp_mudancas'];

	?>

	<!-- Jumbotron Header -->
	<header class="jumbotron my-4">
		<div class="container">
			<h1 class="display-8">Bem vindo, <a class="text-capitalize"><?php echo $_SESSION['usuario']; ?>! </a></h1>
			<p class="lead">Abaixo você pode alterar os dados do candidato <b><a class="text-capitalize"> <?php echo $linha['nome']; ?>! </a></b></p>
		</div>
	</header>
	<!-- Final Jumbotron Header -->

	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Alteração de Cadastro</h1>
				<form action="edit_script.php" method="POST">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nome">Nome completo:</label>
							<input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="endereco">Endereço:</label>
							<input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">E-mail:</label>
							<input type="email" class="form-control" name="email" value="<?php echo $linha['email']; ?>">
						</div>		
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="telefone">Telefone:</label>
							<input type="text" class="form-control" name="telefone" onkeypress="$(this).mask('(00) 00000-0000');" value="<?php echo $linha['telefone']; ?>">
						</div>
					</div>					
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="cpf">CPF:</label>
							<input type="text" class="form-control" name="cpf" onkeypress="$(this).mask('000.000.000-00');" value="<?php echo $linha['cpf']; ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="data_nascimento">Data de nascimento:</label>
							<input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>">
						</div>	
						<div class="form-group col-md-2">
							<label for="sexo">Sexo:</label>
							<select class="form-control" name="sexo" id="sexo">
								<option><?php echo $linha['sexo']; ?></option>
								<option value="Selecione">Selecione</option>
								<option value="Masculino">Masculino</option>
								<option value="Feminino">Feminino</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="estado_civil">Estado Civil:</label>
							<select class="form-control" name="estado_civil" id="estado_civil">
								<option><?php echo $linha['estado_civil']; ?></option>
								<option value="Selecione">Selecione</option>
								<option value="Solteiro">Solteiro</option>
								<option value="Casado">Casado</option>
								<option value="Viuvo">Viúvo</option>
								<option value="Divorciado">Divorciado</option>
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
								<option value="Selecione">Selecione</option>
								<option value="Fundamental">Fundamental</option>
								<option value="Médio">Médio</option>
								<option value="Técnico">Técnico</option>
								<option value="Superior">Superior</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="estado_conclusao">Estado:</label>
							<select class="form-control" name="estado_conclusao" id="estado_conclusao">
								<option><?php echo $linha['estado_conclusao']; ?></option>
								<option value="Selecione">Selecione</option>
								<option value="Concluído">Concluído</option>
								<option value="Não concluído">Não concluído</option>
								<option value="Em andamento">Em andamento</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="data_conclusao">Data de conclusão:</label>
							<input type="date" class="form-control" id="data_conclusao" name="data_conclusao" value="<?php echo $linha['data_conclusao']; ?>">
						</div>
					</div>
					<div class="form-row">	
						<div class="form-group col-md-6">
							<label for="escola">Nome da escola:</label>
							<input type="text" class="form-control" id="escola" name="escola" value="<?php echo $linha['escola']; ?>">
						</div>					
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="curso">Nome do curso:</label>
							<input type="text" class="form-control" id="curso" name="curso" value="<?php echo $linha['curso']; ?>">
						</div>
					</div>

					<!-- FIM Formação acadêmica -->

					<hr>

					<!-- INICIO Dados profissionais -->
					<h4>Dados Profissionais</h4>

					<div class="form-row" id="experiencia">	
						<div class="form-group col-md-6">
							<label for="empresa">Nome da empresa:</label>
							<input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo $linha['empresa']; ?>">
						</div>					
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="cargo">Cargo:</label>
							<input type="text" class="form-control" id="cargo" name="cargo" value="<?php echo $linha['cargo']; ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="data_inicio">Data de início:</label>
							<input type="date" class="form-control" id="data_inicio" name="data_inicio" value="<?php echo $linha['data_inicio']; ?>">
						</div>
						<div class="form-group col-md-3">
							<label for="data_final">Data de saída:</label>
							<input type="date" class="form-control" id="data_final" name="data_final" value="<?php echo $linha['data_final']; ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="atividades">Atividades desempenhadas:</label>
							<textarea type="text" class="form-control" id="atividades" name="atividades"><?php echo $linha['atividades']; ?></textarea>
						</div>
					</div>

					<!-- FIM Dados profissionais -->

					<hr>

					<h4>Informações Complementares</h4>
					<div class="form-row">			
						<div class="col-md-3">
							<label for="disp_viagens">Disponipilidade para viagens:</label>
						</br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="disp_viagens" id="disp_viagens" value="Yes" <?= $disp_viagens == "Yes" ? 'checked="true"' : ''; ?>>
							<label class="form-check-label" for="disp_viagens">
								Sim
							</label>  
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="disp_viagens" id="disp_viagens" value="No" <?= $disp_viagens == "No" ? 'checked="true"' : ''; ?>>
							<label class="form-check-label" for="disp_viagens">
								Não
							</label>  
						</div>
					</div>					
					<div class="col-md-3">
						<label for="disp_mudancas">Disponipilidade para mudanças:</label>
					</br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="disp_mudancas" id="disp_mudancas" value="Yes" <?= $disp_mudancas == "Yes" ? 'checked="true"' : ''; ?>>
						<label class="form-check-label" for="disp_mudancas">
							Sim
						</label>  
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="disp_mudancas" id="disp_mudancas" value="No" <?= $disp_mudancas == "No" ? 'checked="true"' : ''; ?>>
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
						<input type="number" class="dinheiro form-control" onkeypress="$(this).mask('0000.00');" id="pretensao" name="pretensao" value="<?php echo $linha['pretensao']; ?>">
					</div>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="vaga_pretendida">Vaga pretendida:</label>
					<select class="form-control" name="vaga_pretendida" id="vaga_pretendida">
						<option value="<?php echo $linha['vaga_pretendida']; ?>"><?php echo $linha['vaga_pretendida']; ?></option>
						<?php 

						$sql1 = "SELECT * FROM vagas";

						$dados1 = mysqli_query($conn, $sql1);
						
						while ($linha1 = mysqli_fetch_assoc($dados1)) { ?>

							<option value="<?php echo $linha1['vaga'] ?>" ><?php echo $linha1['vaga'] ?></option>

						<?php } ?>
					</select>
				</div>
			</div>

			<!-- FIM Informações complementares -->

			<button type="submit" class="btn btn-outline-success">
				<input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
				<svg width="20px" height="20px" viewBox="1 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
				</svg>Salvar
			</button>

			<a href="pesquisa.php" class="btn btn-outline-danger">
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
		<script src="js/validator.min.js"></script>

	</body>

	</html>