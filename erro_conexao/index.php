<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db); 


    if ($conn->connect_errno) {
        echo "Error na conexão! <br>";
        echo "Erro: " . $conn->connect_error;
    }


?>