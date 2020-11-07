<?php
        require_once "php/actions/conexao.php";
        include_once "php/includes/head.php";
        include_once "php/includes/header.php";
        include "php/actions/verifica_login.php";

        if(isset($_SESSION['id_usuario']) && isset($_SESSION['nome']) && isset($_SESSION['email'])) {
                
                $id = $_SESSION['id_usuario'];
                
                $sql = "select * from atividades where autor = $id";
                $result = $conn->query($sql);

?>     

        <h3 class="text-center mt-3">Suas atividades cadastradas</h3>  

        <?php
            while($row = mysqli_fetch_assoc($result)) {

        ?>

        <div class="container d-flex justify-content-center mt-5">
            <div class="card border" style="width: 50rem;">
                <h4 class="text-center mt-3">Disciplina: <?php echo $row['disciplina']; ?></h4>

                <h5 class="text-center">Metodologia: <?php echo $row['metodologia']; ?></h5>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['titulo']; ?></h5>
                    <p class="card-text"><?php echo $row['descricao']; ?></p>

                    <div class="container d-flex justify-content-between p-0">
                        <textarea cols="16" rows="3" disabled><?php echo $row['links']; ?></textarea>
                        <img src="img/pdf.png" style="cursor: pointer;" width="60" height="70">
                    </div>
    
                </div>
            </div>
        </div>

<?php } ?>
<?php } ?>

<?php include_once "php/includes/final_html.php"; ?>