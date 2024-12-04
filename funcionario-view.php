<?php
require 'conexao.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuário - Visualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">  
     
</head>
<body>

<div id="home" class="background">
    <header class="navbar">
      <div class="container">
        <nav>
          <div class="logo">
            <a href="#"><img src="img/logo.png" alt="Logo Torcida Style"></a>
          </div>
          <ul class="ul">
            <li><a href="novidade.php">Novidades</a></li>
            <li><a href="camisetas.php">Camisetas</a></li>
            <li><a href="conjuntos.php">Conjuntos</a></li>
            <li><a href="acessorios.php">Acessórios</a></li>
            <li><a href="sobrenos.php">Sobre Nós</a></li>
            <li><a href="funcionario-view.php">Cadastro de Funcionario</a></li>
            <li>
            <a href="#" id="profile-icon"><img src="img/conta.svg" alt="Perfil"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="profile-modal" class="modal">
        <div class="modal-content">
            <button id="close-modal" class="close-button">×</button>
            <h2>Login</h2>
            <form method="POST" action="">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
            <?php if (!empty($erro)) : ?>
                <p style="color: red;"><?= htmlspecialchars($erro) ?></p>
            <?php endif; ?>
            <div class="register-link">
                <a href="login.php">Registrar-se</a>
            </div>
        </div>
    </div>
    

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Visualizar usuário
                        <a href="cadastrofuncionario.php" class="btn btn-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                        $funcionario_id = mysqli_real_escape_string($conexao, $_GET['id']);
                        $sql = "SELECT * FROM funcionario WHERE id='$funcionario_id'";
                        $query = mysqli_query($conexao, $sql);
                    
                        if (mysqli_num_rows($query) > 0) {
                            $funcionario = mysqli_fetch_array($query);
                            ?>
                            <div class="mb-3">
                                <label>Nome</label>
                                <p class="form-control"><?= htmlspecialchars($funcionario['nome']); ?></p>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <p class="form-control"><?= htmlspecialchars($funcionario['email']); ?></p>
                            </div>
                            <div class="mb-3">
                                <label>Data Nascimento</label>
                                <p class="form-control">
                                    <?= !empty($funcionario['data_nascimento']) ? date('d/m/Y', strtotime($funcionario['data_nascimento'])) : 'Não informado'; ?>
                                </p>
                            </div>
                            <?php
                        } else {
                            echo "<h5>Usuário não encontrado</h5>";
                        }
                    } else {
                        echo "<h5>ID não fornecido na URL</h5>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-section">
          <h3>Baixe o app</h3>
          <p>Venha fazer parte da família e ter uma experiência incrível!</p>
          <div class="app-links">
            <a href="#"><img src="img/app_store.png" alt="App Store"></a>
            <a href="#"><img src="img/google_play.png" alt="Google Play"></a>
          </div>
        </div>
        <div class="footer-section">
          <h3>Inscreva-se na nossa newsletter</h3>
          <p>Receba novidades, lançamentos e promoções em seu e-mail.</p>
          <form class="newsletter-form">
            <input type="email" placeholder="Digite seu e-mail">
            <button type="submit">Enviar</button>
          </form>
        </div>
      </div>
      <hr>
      <div class="footer-bottom">
        <div class="footer-column">
          <h4>Categorias</h4>
          <ul>
            <li><a href="#">Novidades</a></li>
            <li><a href="#">Masculino</a></li>
            <li><a href="#">Feminino</a></li>
            <li><a href="#">Acessórios</a></li>
            <li><a href="#">Black Friday</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Ajuda e Suporte</h4>
          <ul>
            <li><a href="#">Central de Atendimento</a></li>
            <li><a href="#">Formas de Pagamento</a></li>
            <li><a href="#">Formas de Entrega</a></li>
            <li><a href="#">Trocas e Devoluções</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Sobre Nós</h4>
          <ul>
            <li><a href="#">Nossa História</a></li>
            <li><a href="#">Sustentabilidade</a></li>
            <li><a href="#">Cartão Presente</a></li>
            <li><a href="#">Mapa do Site</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Siga nas redes</h4>
          <div class="social-icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fas fa-envelope"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
