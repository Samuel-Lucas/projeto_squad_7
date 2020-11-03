<?php 
    require_once "conexao.php";

    session_start();

    if(isset($_POST['disciplina']) && isset($_POST['metodologia']) && isset($_POST['titulo'])
    && isset($_POST['descricao']) && isset($_POST['links']) && isset($_POST['termo'])) {

        $disciplina = $_POST['disciplina'];
        $metodologia = $_POST['metodologia'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $links = $_POST['links'];
        $termo = $_POST['termo'];

        $id = $_SESSION['id_usuario'];

        $sql = "insert into atividades 
        values (null, '$disciplina', '$metodologia', '$titulo', '$descricao', '$links', '$termo', '$id')";

        mysqli_query($conn, $sql);

        header("Location: ../../painel.php");

    } else {

        $_SESSION['atividade_erro'] = true;
        header("Location: ../../incluir_atividade.php");
    }
?>