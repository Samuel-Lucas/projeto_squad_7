<?php 
        session_start();
    
        include_once "php/includes/head.php";
    
        if(isset($_SESSION['sucesso'])) {
            echo "<script> alert('Cadastro realizado com sucesso !')</script>";

            unset($_SESSION['sucesso']);
        }
?>

        <div class="container p-5 mt-4 container_login">
            <div class="logo d-flex justify-content-center mb-5">
                <a href="index.php">
                    <img src="img/logo_aumentado.jpg" width="160">
                </a>
            </div>

            <div class="container">
                <div class="row">

                    <div class="bloco_esquerdo col-md-6 d-flex justify-content-md-end justify-content-sm-center">
                        <img src="img/img_login.jpg" class="img-login" width="250">
                    </div>

                    <div class="col-md-5 ml-md-3 mt-5">
                        
                        <div class="container">

                            <div class="google d-flex justify-content-around align-items-center mb-2 border">
                                <img src="img/logo_google.png">
                                <p class="text-white my-auto margem_google mr-5 pr-4">Login com Google</p>
                            </div>

                            <div class="face d-flex justify-content-around align-items-center mb-3">
                                <img src="img/face_logo.png">
                                <p class="text-white my-auto mr-5">Login com Facebook</p>
                            </div>
                        </div>

                        <div class="container">
                            <form action="php/actions/logar.php" class="form-group" method="post">

                                <input type="text" name="email" class="form-control email" placeholder="E-mail"><br>

                                <input type="password" name="senha" class="form-control senha" placeholder="Senha"><br>

                                <button type="submit" class="btn btn-info btn-block">Entrar</button>
                            </form>

                            <a href="cadastro.php" class="text-secondary ml-auto">Criar Conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>