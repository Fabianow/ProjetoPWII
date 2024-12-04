<?php
session_start();
require 'conexao.php';

if (isset($_POST['create_usuario'])) {
    // Escapando e limpando os dados recebidos via POST
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    
    // Definindo a variável $senha com valor padrão 'null' caso não tenha sido enviada
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, trim($_POST['senha'])) : null;

    // Inserindo os dados na tabela 'funcionario'
    $sql = "INSERT INTO funcionario (nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";
    
    // Executando a query
    mysqli_query($conexao, $sql);
    if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Usuário criado com sucesso';
		header('Location: cadastrofuncionario.php');
		exit;
	} else {
		$_SESSION['mensagem'] = 'Usuário não foi criado';
		header('Location: cadastrofuncionario.php');
		exit;
	}
}

if (isset($_POST['update_funcionario'])) {
	$funcionario_id = mysqli_real_escape_string($conexao, $_POST['funcionario_id']);
	$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
	$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
	$sql = "UPDATE funcionario SET nome = '$nome', email = '$email', data_nascimento = '$data_nascimento'";
	if (!empty($senha)) {
		$sql .= ", senha='" . password_hash($senha, PASSWORD_DEFAULT) . "'";
	}
	$sql .= " WHERE id = '$funcionario_id'";
	mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Usuário atualizado com sucesso';
		header('Location: cadastrofuncionario.php');
		exit;
	} else {
		$_SESSION['mensagem'] = 'Usuário não foi atualizado';
		header('Location: cadastrofuncionario.php');
		exit;
	}
}

if (isset($_POST['delete_funcionario'])) {
  $funcionario_id = mysqli_real_escape_string($conexao, $_POST['delete_funcionario']);
  $sql = "DELETE FROM funcionario WHERE id = $funcionario_id"; // Sem aspas ao redor da variável
  mysqli_query($conexao, $sql);
  if (mysqli_affected_rows($conexao) > 0) {
    $_SESSION['message'] = 'Funcionario deletado com sucesso';
    header('Location: cadastrofuncionario.php');
    exit;
  } else {
    $_SESSION['message'] = 'Funcionario nao foi deletado';
    header('Location: cadastrofuncionario.php');
    exit;
  }
}

?>
