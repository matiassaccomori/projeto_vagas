<?php 
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index_login.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from login_user where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: pesquisa.php');
	exit();
}
else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index_login.php');
	exit();
}

?>