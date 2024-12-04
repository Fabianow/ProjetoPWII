<?php
session_start();
require 'conexao.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    
  </head>
  <body>
  
    </header>

   
    
    

    



    
    
    <div class="container mt-4">
      <?php include('mensagem.php'); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4> lista de usuarios
              <a href="usuario-create.php" class="btn btn-primary float-end">Adicionar usuário</a>
              </h4> 
           </div>
           <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Data Nascimento</th>
                  <th>Açoes</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = 'SELECT * FROM funcionario';
                $funcionario = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($funcionario) > 0) {
                  foreach($funcionario as $funcionario){
                ?>
                <tr>
                  <td><?=$funcionario['id']?></td>
                  <td><?=$funcionario['nome']?></td>
                  <td><?=$funcionario['email']?></td>
                  <td><?=date('d/m/Y', strtotime($funcionario['data_nascimento']))?></td>
                  <td>
                  <a href="funcionario-view.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-secondary btn-sm"><span class="bi-eye-fill"></span>&nbsp;Visualizar</a>

                  <a href="funcionario-edit.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill"></span>&nbsp;Editar</a>

                    <form action="acoes.php" method="POST" class="d-inline">
                      <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit" name="delete_funcionario" value="<?=$funcionario['id']?>" class="btn btn-danger btn-sm">
                      <span class="bi-trash3-fill"></span>&nbsp;Excluir
                       </button>
                   </form>
                  </td>
                </tr>
                <?php
                }
              }else{
                echo '<h5>Nenhum usuário encontrado</h5>';
              }
              ?>
          
              </tbody>
           </table>
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