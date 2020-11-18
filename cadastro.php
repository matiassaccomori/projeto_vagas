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
					<li class="nav-item active">
						<a class="nav-link" href="cadastro.php">Cadastro
							<span class="sr-only">(current)</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Final Barra de Navegação -->

	<!-- Header -->
	<header class="jumbotron my-4">
		<div class="container">
			<h1 class="display-6">Abaixo você pode realizar o seu cadastro!</h1>
			<p class="lead">Preencha os campos abaixo com as suas informações e aguarde o nosso contato.</p>
			<p class="lead">Iremos estudar o seu currículo e veremos qual a melhor oportunidade para o seu perfil, após isso iremos ligar para você para marcar uma entrevista.</p>
		</div>
	</header>
	<!-- Final Header -->

	<!-- Cadastro de candidatos -->

	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Cadastro</h1>

				<hr>

				<!-- INICIO Dados pessoais -->
				<h4>Dados Pessoais</h4>
				<form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nome">Nome completo:</label>
							<input type="text" class="form-control" id="nome" name="nome" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="endereco">Endereço:</label>
							<input type="text" class="form-control" id="endereco" name="endereco">
						</div>
					</div>		
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">E-mail:</label>
							<input type="email" class="form-control" id="email" name="email">
						</div>		
					</div>			
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="telefone">Telefone:</label>
							<input type="text" class="form-control" onkeypress="$(this).mask('(00) 00000-0000');" id="telefone" name="telefone">
						</div>
						<div class="form-group col-md-3">
							<label for="cpf">CPF:</label>
							<input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');" id="cpf" name="cpf">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="data_nascimento">Data de nascimento:</label>
							<input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
						</div>	
						<div class="form-group col-md-2">
							<label for="sexo">Sexo:</label>
							<select class="form-control" name="sexo" id="sexo">
								<option value="Selecione">Selecione</option>
								<option value="Masculino">Masculino</option>
								<option value="Feminino">Feminino</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="estado_civil">Estado Civil:</label>
							<select class="form-control" name="estado_civil" id="estado_civil">
								<option value="Selecione">Selecione</option>
								<option value="Solteiro">Solteiro</option>
								<option value="Casado">Casado</option>
								<option value="Viuvo">Viúvo</option>
								<option value="Divorciado">Divorciado</option>
							</select>
						</div>
					</div>
					<!-- FIM Dados pessoais -->

					<hr>

					<!-- INICIO Formação acadêmica -->
					<h4>Formação Acadêmica</h4>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="grau">Grau de escolaridade:</label>
							<select class="form-control" name="grau" id="grau">
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
								<option value="Selecione">Selecione</option>
								<option value="Concluído">Concluído</option>
								<option value="Não concluído">Não concluído</option>
								<option value="Em andamento">Em andamento</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="data_conclusao">Data de conclusão:</label>
							<input type="date" class="form-control" id="data_conclusao" name="data_conclusao">
						</div>
					</div>
					<div class="form-row">	
						<div class="form-group col-md-6">
							<label for="escola">Nome da escola:</label>
							<input type="text" class="form-control" id="escola" name="escola">
						</div>					
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="curso">Nome do curso:</label>
							<input type="text" class="form-control" id="curso" name="curso">
						</div>
					</div>

					<!-- FIM Formação acadêmica -->

					<hr>

					<!-- INICIO Dados profissionais -->
					<h4>Dados Profissionais</h4>

					<div class="form-row" id="experiencia">	
						<div class="form-group col-md-6">
							<label for="empresa">Nome da empresa:</label>
							<input type="text" class="form-control" id="empresa" name="empresa">
						</div>					
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="cargo">Cargo:</label>
							<input type="text" class="form-control" id="cargo" name="cargo">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="data_inicio">Data de início:</label>
							<input type="date" class="form-control" id="data_inicio" name="data_inicio">
						</div>
						<div class="form-group col-md-3">
							<label for="data_final">Data de saída:</label>
							<input type="date" class="form-control" id="data_final" name="data_final">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="atividades">Atividades desempenhadas:</label>
							<textarea type="text" class="form-control" id="atividades" name="atividades"></textarea>
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
							<input class="form-check-input" type="radio" name="disp_viagens" id="disp_viagens" value="Yes" checked>
							Sim
						</div> 
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="disp_viagens" id="disp_viagens" value="No">         
							Não
						</div>
					</div>
					<div class="col-md-3">
						<label for="disp_mudancas">Disponipilidade para mudanças:</label>
					</br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="disp_mudancas" id="disp_mudancas" value="Yes" checked="">
						Sim
					</div> 
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="disp_mudancas" id="disp_mudancas" value="No">         
						Não
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
						<input type="number" class="dinheiro form-control" onkeypress="$(this).mask('0000.00');" id="pretensao" name="pretensao">
					</div>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="vaga_pretendida">Vaga pretendida:</label>
					<select class="form-control" name="vaga_pretendida" id="vaga_pretendida">
						<option value="null">Selecione</option>
						<?php 
						include "conexao.php";

						$sql = "SELECT * FROM vagas";

						$dados = mysqli_query($conn, $sql);
						
						while ($linha = mysqli_fetch_assoc($dados)) { ?>

						<option value="<?php echo $linha['vaga'] ?>" ><?php echo $linha['vaga'] ?></option>
						
					<?php } ?>

				</select>
			</div>
		</div>

		<!-- FIM Informações complementares -->

		<hr>

		<!-- INICIO Anexar currículo -->
		<h4>Anexar Currículo</h4>
		<div class="form-row">			
			<div class="form-group col-md-6">
				<label for="curriculo">Currículo:</label>
				<input type="file" class="form-control" id="curriculo" name="curriculo" accept=".pdf" required>
			</div>
		</div>
		<!-- FIM Anexar currículo -->

		<br/>
		<button type="submit" class="btn btn-outline-success btn-sm">
			<svg width="2em" height="2em" viewBox="1 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
			</svg>Salvar
		</button>					
		<a href="index.php" class="btn btn-outline-danger btn-sm">
			<svg width="2em" height="2em" viewBox="1 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
			</svg>Cancelar</a>
		</form>
	</div>
</div>
</div>

<br/>

<!-- Final Cadastro de candidatos -->

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
	<script src="js/validator.min.js"></script>

</body>

</html>
