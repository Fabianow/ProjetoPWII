<?php
include_once 'conexao_login.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
<div class="container-login">
    <div class="img-box">
        <img src="img/login_img.svg" alt="Imagem ilustrativa">
    </div>
    <div class="content-box">
        <div class="form-box">
            <h1>Cadastro de Usuário</h1>
            <?php if (!empty($erro)): ?>
                <p style="color: red; text-align: center;"><?php echo $erro; ?></p>
            <?php endif; ?>
            <form method="POST" action="">
                <div class="input-box">
                    <span>Nome</span>
                    <input type="text" name="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="input-box">
                    <span>E-mail</span>
                    <input type="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="input-box">
                    <span>Senha</span>
                    <input type="password" name="senha" placeholder="Digite sua senha" required>
                </div>
                <div class="input-box">
                    <span>Celular</span>
                    <input type="text" name="celular" placeholder="Digite seu celular" required>
                </div>
                <div class="input-box">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
