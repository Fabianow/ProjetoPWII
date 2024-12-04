<?php
// Conexão ao banco de dados
$host = 'localhost';
$database = 'ecommerce';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// Processar login
$erro = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (!empty($email) && !empty($senha)) {
        $stmt = $pdo->prepare('SELECT * FROM usuário WHERE email = :email AND senha = :senha');
        $stmt->execute(['email' => $email, 'senha' => $senha]);
        $usuario = $stmt->fetch();

        if ($usuario) {
            echo "<script>alert('Login realizado com sucesso!');</script>";
        } else {
            $erro = 'Credenciais inválidas!';
        }
    } else {
        $erro = 'Preencha todos os campos!';
    }
}
?>