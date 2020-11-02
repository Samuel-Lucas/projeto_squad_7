<?php
    session_start();

    require_once "conexao.php";

    if(isset($_POST['nome']) && isset($_POST['genero']) && isset($_POST['perfil'])
    && isset($_POST['email']) && isset($_POST['senha'])) {
        
        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $perfil = $_POST['perfil'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "insert into usuarios (id_usuario, nome, genero, perfil, email, senha)
        values (null, '$nome', '$genero', '$perfil', '$email', md5('$senha'))";

        if ($conn->query($sql) === TRUE) {

            $_SESSION['sucesso'] = true;
            header("Location: ../../login.php");
        } else {
            echo "Erro ao cadastrar: " . $sql . "<br>" . $conn->error;
        }
    } else {

        header("Location: ../../cadastro.php");
    }
?>