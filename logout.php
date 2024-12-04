<?php
session_start();
session_destroy(); // Remove a sessão ativa
echo json_encode(['success' => true]);
?>