<?php
        require_once "conexao.php";

        session_start();

        if(isset($_POST['email']) && isset($_POST['senha'])) {

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "select * from usuarios where email = '$email' and senha = md5('$senha') limit 1";

            $result = $conn->query($sql);

            while($row = mysqli_fetch_assoc($result)) {
                if ($row['id_usuario']) {
                    $_SESSION['id_usuario'] = $row['id_usuario'];
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['email'] = $row['email'];


                    header("Location: ../../painel.php");
                }
            }
        } else {
            
            header("Location: ../../login.php");
        }
?>