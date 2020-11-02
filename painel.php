<?php
        require_once "php/actions/conexao.php";

        session_start();

        echo $_SESSION['id_usuario'];
        echo $_SESSION['nome'];
        echo $_SESSION['email'];

?>