<?php 


$server = "localhost";
$user = "root";
$password = "";
$bd = "projeto";

// Teste

// define('HOST', '127.0.0.1');
// define('USUARIO', 'root');
// define('SENHA', '');
// define('DB', 'projeto');

$conexao = mysqli_connect($server, $user, $password, $bd) or die ('Não foi possível conectar');

// Teste

//mysqli_connect($server, $user, $password, $bd);

if ($conn = mysqli_connect($server, $user, $password, $bd)) {
		//echo "Conectado!";
}
else {
	echo "Erro!";
}

function mensagem($texto, $tipo) {
	echo "<div class='alert alert-$tipo' role='alert'>
	$texto
	</div>";
}

function mostra_data($data) {
	$d = explode('-', $data);
	$escreve = $d[2] ."/" .$d[1] ."/" .$d[0]; 
	return $escreve;
}

function mover_curriculo($vetor_curriculo){
	$vtipo = explode("/", $vetor_curriculo['type']);
	$tipo = $vtipo[0] ?? '';
	$extensao = "." .$vtipo[1] ?? '';
	$nome = $_POST['nome'];
	if ((!$vetor_curriculo['error']) and ($vetor_curriculo['size'] <= 1000000)) {
		$nome_arquivo = date('Y-m-d') .' - ' .$nome .$extensao;
		move_uploaded_file($vetor_curriculo['tmp_name'], "pdf/" .$nome_arquivo);
		return $nome_arquivo;
	}
	else {
		return 0;
	}
}

function mover_foto($vetor_foto){
	$vtipoI = explode("/", $vetor_foto['type']);
	$tipoI = $vtipoI[0] ?? '';
	$extensaoI = "." .$vtipoI[1] ?? '';
	$vaga = $_POST['vaga'];
	if((!$vetor_foto['error']) and ($vetor_foto['size'] <= 5000000) and ($tipoI == "image")){
		$nome_foto = date('Y-m-d') .' - ' .$vaga .$extensaoI;
		move_uploaded_file($vetor_foto['tmp_name'], "images/" .$nome_foto);
		return $nome_foto;
	}
	else{
		return 0;
	}
}

?>
