<?php 


    $raca = "Vira Lata";
    $nome = "Turca";
    $idade = 3;
    $cor = "Preta";

    $turca = compact("raca", "nome", "idade", "cor");

    print_r($turca);
    echo "<br>";
    
    foreach ($turca as $caracteristicas => $value) {

        echo "$caracteristicas: $value <br>";
    }




?>