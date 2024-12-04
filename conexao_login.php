<?php
// Configuração de conexão com o banco de dados
$host = 'localhost';
$database = 'ecommerce';
$user = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $celular = trim($_POST['celular']);

    // Validações básicas
    if (empty($nome) || empty($email) || empty($senha) || empty($celular)) {
        $erro = "Todos os campos são obrigatórios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "E-mail inválido.";
    } else {
        // Insere o novo usuário no banco de dados
        $query = "INSERT INTO usuário (nome, email, senha, celular) VALUES (:nome, :email, :senha, :celular)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha); // Idealmente, a senha deve ser hash (ex.: password_hash)
        $stmt->bindParam(':celular', $celular);

        if ($stmt->execute()) {
            // Redireciona para a página inicial
            header("Location: index.php");
            exit();
        } else {
            $erro = "Erro ao cadastrar o usuário. Tente novamente.";
        }
    }
}
?>
