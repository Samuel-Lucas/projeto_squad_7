<?php
        require_once "php/actions/conexao.php";
        include_once "php/includes/head.php";
        include_once "php/includes/header.php";
        include "php/actions/verifica_login.php";

?>      
        <h3 class="text-center mt-3">Seu Perfil</h3>

        <div class="container">
                <div class="row">
                        <div class="col-md-6">
                            <h4 class="text-center mt-2">Suas atividades</h4>
                        </div>

                        <div class="col-md-6 mx-auto">
                                <div class="d-flex justify-content-center mb-3">
                                   <img src="img/img_perfil.jpg" width="150" height="150">
                                </div>

                                <a class="text-secondary mt-2" href="incluir_atividade.php">Incluir atividade</a><br>
                                <a class="text-secondary mt-2" href="atividades_cadastradas.php">Suas atividades</a><br>
                        </div>
                </div>
        </div>