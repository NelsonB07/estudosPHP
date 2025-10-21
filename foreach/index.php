<?php 


    $nomes = ["Nelson", "Junior", "Brandão", "Carvalho"];
    $a = 10;

    foreach($nomes as $nome) {
        echo "O nome do índice atual é $nome <br>"; 
        if ($nome === "Nelson") {
            echo "Opa $a <br>";
        }
    }


?>