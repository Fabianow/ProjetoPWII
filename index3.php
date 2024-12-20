<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="script" href="barra.js">
    <title>Torcida Style</title>
    
</head>
<body>
Bem-Vindo a Tela Inicial, <?php echo $_SESSION['nome']; ?>    

    <p>
        <a href="logout.php">Sair</a>
    </p>

    <nav>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#FFFFFF"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">teste</a></li>
            <li><a href="#">teste!</a></li>
        </ul>
        <ul>
            <li><a href="base.html"><img src="logostylesfundo.png" alt="logo"></a></li>
            <li class="hideOnMoblie"><a href="#">Contato</a></li>
            <li class="hideOnMoblie"><a href="#">Sobre</a></li>
            <li class="hideOnMoblie"><a href="#">teste</a></li>
            <li class="hideOnMoblie"><a href="#">teste!</a></li>
            <li class="menu-button" onclick=showSideBar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg"  height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </nav>
    <!--fim da barra do inicio-->
    <div class="card-container">
        <div class="card">
            <img src="spcamisa.png">
            <div class="card-content">
                <h3>card1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam corrupti magnam, quisquam placea
                 Voluptates ea adipisci odit fuga. Amet, id.</p>
                 <a href="comprapg1.html" class="btn">compre</a>
            </div>
        </div>
        <div class="card">
            <img src="spcamisa.png">
            <div class="card-content">
                <h3>card1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam corrupti magnam, quisquam placea
                 Voluptates ea adipisci odit fuga. Amet, id.</p>
                 <a href="" class="btn">compre</a>
            </div>
        </div>
        <div class="card">
            <img src="spcamisa.png">
            <div class="card-content">
                <h3>card1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam corrupti magnam, quisquam placea
                 Voluptates ea adipisci odit fuga. Amet, id.</p>
                 <a href="" class="btn">compre</a>
            </div>
        </div>
        <div class="card">
            <img src="spcamisa.png">
            <div class="card-content">
                <h3>card1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam corrupti magnam, quisquam placea
                 Voluptates ea adipisci odit fuga. Amet, id.</p>
                 <a href="" class="btn">compre</a>
            </div>
        </div>
        <div class="card">
            <img src="spcamisa.png">
            <div class="card-content">
                <h3>card1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam corrupti magnam, quisquam placea
                 Voluptates ea adipisci odit fuga. Amet, id.</p>
                 <a href="" class="btn">compre</a>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <h3>Projeto Style</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel minus asperiores unde corporis quia.</p>
        </div>
        <div class="footer-bottom">
            <p>Todos os direitos reservados para ProjetoStyle &copy;2024</p>
        </div>
    </footer>
    

     
    <script>
        function showSideBar(){
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'flex';
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'none';
        }
    </script>
</body>
</html>