<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "projeto_sd7";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn) {
        echo "Erro na conexão ".mysqli_connect_error();
    }
?>