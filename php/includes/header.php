<?php
    session_start();
?>

<header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
              <div class="container">
      
                <a href="index.php">
                  <img class="navbar-brand" src="img/logo.jpg" width="142">
                </a>
      
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navPrincipal">
                  <span class="navbar-toggle-icon">
                    <i class="fas fa-bars"></i>
                  </span>
                </button>
      
                <div class="collapse navbar-collapse" id="navPrincipal">
                  <ul class="navbar-nav ml-auto">

                    <li class="nav-item d-flex m-1">
                        <div class="d-block d-md-none">
                            <img src="img/escola_ativa.jpg" width="30">
                        </div>
                        <a href="#" class="nav-link ml-1">Comunidade Escola Ativa</a>
                    </li>
      
                    <li class="nav-item d-flex m-1">
                        <div class="d-block d-md-none">
                            <img src="img/quem_somos.jpg" width="30">
                        </div>
                        <a href="#" class="nav-link ml-1">Quem Somos</a>
                    </li>
      
                    <li class="nav-item d-flex m-1">
                        <div class="d-block d-md-none">
                            <img src="img/metodologia_ativa.jpg" width="30">
                        </div>
                        <a href="#" class="nav-link ml-1">Metodologias Ativas</a>
                    </li>
      
                    <li class="nav-item d-flex m-1">
                        <div class="d-block d-md-none">
                            <img src="img/noticias.jpg" width="30">
                        </div>
                        <a href="#" class="nav-link ml-1">Notícias</a>
                    </li>
                              
                <?php

                  if(isset($_SESSION['nome'])) {

                    $nome = $_SESSION['nome'];
   
                ?>

                  <li class="nav-item d-flex m-1">
                        <div class="d-block d-md-none">
                            <img src="img/noticias.jpg" width="30">
                        </div>
                        <span class="nav-link">Olá <?php echo $nome; ?><a href="php/actions/sair.php" class="nav-link ml-1">Sair</a>
                  </li>

                  <?php } else {?>
      
                    <li class="nav-item m-1">
                      <a href="login.php" class="btn btn-outline-dark ml-lg-4">Login</a>
                    </li>

                  <?php } ?>
                  </ul>
                </div>
              </div>
            </nav>
</header>
