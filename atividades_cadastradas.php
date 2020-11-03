<?php
        require_once "php/actions/conexao.php";
        include_once "php/includes/head.php";
        include_once "php/includes/header.php";
        include "php/actions/verifica_login.php";

        if(isset($_SESSION['id_usuario']) && isset($_SESSION['nome']) && isset($_SESSION['email'])) {
                
                $id = $_SESSION['id_usuario'];
                $nome = $_SESSION['nome'];
                
                $sql = "select * from atividades where autor = $id";
                $result = $conn->query($sql);
?>     

        <h3 class="text-center mt-3">Suas atividades cadastradas</h3>

        <div class="container d-flex justify-content-center mt-4">
            <div class="row">
                <div class="col-md-12">

                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <th>Disciplina</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                            <td>
                                <?php echo $row['disciplina']?>                   
                            </td>

                            <td>
                                <?php echo $row['titulo']?>                   
                            </td>

                            <td>
                                <?php echo $row['descricao']?>                   
                            </td>
                        </tr>

                        <?php
                        }
                    ?>
                <?php
                  }
                ?>           
            </table>
                </div>
            </div>
        </div>