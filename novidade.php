<strong?php
session_start();
include_once ("conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <title>Torcida Style</title>
</head>

<body>
  <div id="home" class="background">
    <header class="navbar">
      <div class="container">
        <nav>
          <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="Logo Torcida Style"></a>
          </div>
          <ul class="ul">
            <li><a href="novidade.php">Novidades</a></li>
            <li><a href="camisetas.php">Camisetas</a></li>
            <li><a href="conjuntos.php">Conjuntos</a></li>
            <li><a href="acessorios.php">Acessórios</a></li>
            <li><a href="sobrenos.php">Sobre Nós</a></li>
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

    <!-- Search Box -->
    <div class="search-box">
      <div class="container">
        <input type="text" class="search-input" placeholder="Buscar...">
        <button class="search-btn"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
            width="20px" fill="#FFFFFF">
            <path
              d="M765-144 526-383q-30 22-65.79 34.5-35.79 12.5-76.18 12.5Q284-336 214-406t-70-170q0-100 70-170t170-70q100 0 170 70t70 170.03q0 40.39-12.5 76.18Q599-464 577-434l239 239-51 51ZM384-408q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Z" />
          </svg></button>
        <div class="action-buttons">
          <button class="favoritos-btn"><img src="img/favorito.svg" alt=""></button>
          <button class="carrinho-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
              width="24px" fill="#FFFFFF">
              <path
                d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
            </svg></button>

        </div>
      </div>
    </div>

    <main>
      <div class="container">
        <div class="main-text">
          <h1>TORCIDA STYLE</h1>
          <p class="psn"><strong>Novidades</p></strong>
          <p CLASS="H2sn"><strong>Fique por dentro das últimas tendências! Nossa seção de novidades está sempre atualizada com as peças mais originais e que encaixam no seu próprio estilo no mundo dos esportes.<br> Aqui, você encontra lançamentos exclusivos e confortáveis.<br><br>Cada novidade é pensada para trazer mais apoio, oficialidade e estilo aos nossos mais queridos torcedores.<br><br>Não perca a chance de ser o primeiro a obter os mais recentes lançamentos da Torcida Style.</strong></p>
          <div>
            <button class="btn-gradiente">Compre Agora</button>

            <div class="verificado"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                width="24px" fill="#FFFFFF">
                <path
                  d="M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 85-29 163.5T688-214L560-342q-18 11-38.5 16.5T480-320q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 22-5.5 42.5T618-398l60 60q20-41 31-86t11-92v-189l-240-90-240 90v189q0 121 68 220t172 132q26-8 49.5-20.5T576-214l56 56q-33 27-71.5 47T480-80Zm0-320q33 0 56.5-23.5T560-480q0-33-23.5-56.5T480-560q-33 0-56.5 23.5T400-480q0 33 23.5 56.5T480-400Zm8-77Z" />
              </svg>
            </div>
          </div>
        </div>

        <div class="main-img">
          <img src="img/mulhersantista.png" alt="Modelo de Roupas">
        </div>

      </div>
  </div>
  </main>

  </div>

  <div class="divider">
    <hr>
    <span>COMPRE POR CATEGORIA</span>
    <hr>
  </div>

  <div class="categorias">
    <div class="row">
      <div class="col-1">
        <a href="#"><img src="img/categoria_camiseta.png" alt="Categoria Camiseta"></a>
      </div>
      <div class="col-1">
        <img src="img/categoria_itens.png" alt="Categoria Itens">
      </div>
      <div class="col-1">
        <img src="img/categoria_conjuntos.png" alt="Categoria Conjuntos">
      </div>
      <div class="col-1">
        <img src="img/categoria_acessórios.png" alt="Categoria Acessórios">
      </div>
    </div>
  </div>

  <div class="divider">
    <hr>
    <span>TALVEZ VOCÊ GOSTE</span>
    <hr>
  </div>

  <div class="product-grid">
    <div class="product-card">
      <img src="img/conjunto_palmeiras.webp" alt="Conjunto Palmeiras" class="product-image">
      <p class="badge palmeiras">Palmeiras</p>
      <h2 class="product-name">Conjunto <br> Palmeiras</h2>
      <p class="price">R$249,99</p>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="button-container">
        <button class="cart-button">
          <i class="fas fa-shopping-cart"></i> Add to Cart
        </button>
            <button class="buy-now-button" onclick="buyNow('Conjunto Palmeiras', 'img/conjunto_palmeiras.webp', 249.99)"
          <i class="fas fa-bolt"></i> Buy Now
        </button>
      </div>
    </div>

    <div class="product-card">
      <img src="img/camisa_corinthians.png" alt="Camiseta Japão Corinthians" class="product-image">
      <p class="badge corinthians">Corinthians</p>
      <h2 class="product-name">Camiseta Corinthians</h2>
      <p class="price">R$149,99</p>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="button-container">
        <button class="cart-button">
          <i class="fas fa-shopping-cart"></i> Add to Cart
        </button>
        <button class="buy-now-button" onclick="buyNow('Camiseta Corinthians', 'img/camisa_corinthians.png', 149.99)">
          <i class="fas fa-bolt"></i> Buy Now
        </button>
      </div>
    </div>

    <div class="product-card">
      <img src="img/bucket_flamengo.png" alt="Bucket Hair Flamengo" class="product-image">
      <p class="badge flamengo">Flamengo</p>
      <h2 class="product-name">Bucket Hair Flamengo</h2>
      <p class="price">R$ 89,99</p>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="button-container">
        <button class="cart-button">
          <i class="fas fa-shopping-cart"></i> Add to Cart
        </button>
        <button class="buy-now-button" onclick="buyNow('Bucket Hair Flamengo', 'img/bucket_flamengo.png', 89.99)">
          <i class="fas fa-bolt"></i> Buy Now
        </button>
      </div>
    </div>

    <div class="product-card">
      <img src="img/camisa_santos.webp" alt="Camiseta Santos" class="product-image">
      <p class="badge santos">Santos</p>
      <h2 class="product-name">Camiseta <br> Santos</h2>
      <p class="price">R$129,99</p>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="button-container">
        <button class="cart-button">
          <i class="fas fa-shopping-cart"></i> Add to Cart
        </button>
        <button class="buy-now-button" onclick="buyNow('Camiseta Santos', 'img/camisa_santos.webp', 129.99)">
          <i class="fas fa-bolt"></i> Buy Now
        </button>
      </div>
    </div>

    <div class="product-card">
      <img src="img/bag_sao_paulo.jpeg" alt="Bag São Paulo" class="product-image">
      <p class="badge sao-paulo">São Paulo</p>
      <h2 class="product-name">Bag <br> São Paulo</h2>
      <p class="price">R$299,99</p>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="button-container">
        <button class="cart-button">
          <i class="fas fa-shopping-cart"></i> Add to Cart
        </button>
        <button class="buy-now-button" onclick="buyNow('Bag São Paulo', 'img/bag_sao_paulo.jpeg', 299.99)">
          <i class="fas fa-bolt"></i> Buy Now
        </button>
      </div>
    </div>

    <div class="product-card">
      <img src="img/flamens.jpg" alt="Camiseta Flamengo" class="product-image">
      <p class="badge flamengo">Flamengo</p>
      <h2 class="product-name">Camiseta <br> Flamengo</h2>
      <p class="price">R$250,00</p>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="button-container">
        <button class="cart-button">
          <i class="fas fa-shopping-cart"></i> Add to Cart
        </button>
        <button class="buy-now-button" onclick="buyNow('Camiseta Flamengo', 'img/camiseta_flamengo1.jpg', 149.99)">
          <i class="fas fa-bolt"></i> Buy Now
        </button>
      </div>
    </div>

    <div class="product-card">
      <img src="img/conjunto_corinthians.jpg" alt="Conjunto Corinthians" class="product-image">
      <p class="badge corinthians">Corinthians</p>
      <h2 class="product-name">Conjunto Corinthians</h2>
      <p class="price">R$249,99</p>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="button-container">
        <button class="cart-button">
          <i class="fas fa-shopping-cart"></i> Add to Cart
        </button>
        <button class="buy-now-button" onclick="buyNow('Conjunto Corinthians', 'img/conjunto_corinthians.jpg', 249.99)">
          <i class="fas fa-bolt"></i> Buy Now
        </button>
      </div>
    </div>

    <div class="product-card">
      <img src="img/boné_palmeiras.webp" alt="Boné Palmeiras" class="product-image">
      <p class="badge palmeiras">Palmeiras</p>
      <h2 class="product-name">Boné <br> Palmeiras</h2>
      <p class="price">R$89,99</p>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="button-container">
        <button class="cart-button">
          <i class="fas fa-shopping-cart"></i> Add to Cart
        </button>
        <button class="buy-now-button" onclick="buyNow('Boné Palmeiras', 'img/boné_palmeiras.webp', 249.99)">
          <i class="fas fa-bolt"></i> Buy Now
        </button>
      </div>
    </div>
  </div>

  <div class="divider-membership">
    <hr>
    <span>TORCIDA STYLE MEMBERSHIP</span>
    <hr>
  </div>

  <section>
    <img width="1200" height="1200" class="banner-image" src="img/membership-ts.png"
      style="color: transparent; width: 100%; height: auto;">
  </section>

  <section>
    <div class="button-membership">
      <button class="center-button">Junte-se a Nós</button>
  </section>

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


  <script src="script.js"></script>
  <script>
function buyNow(name, image, price, description) {
    const url = `comprapg1.html?name=${encodeURIComponent(name)}&image=${encodeURIComponent(image)}&price=${encodeURIComponent(price)}&description=$
    { encodeURIComponent(description)}`;
    window.location.href = url;
}
</script>
</body>

</html>