<?php
session_start();

if (!isset($_SESSION['nome'])) {
    // Redirecione ou informe o usuário
    header('Location: login.html');
    exit();
}
?>
