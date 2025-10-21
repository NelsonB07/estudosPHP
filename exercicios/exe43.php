<?php 

    $veiculos = "carro - navio - helicóptero - barco - jangada";

    $arr = explode(" - ", $veiculos);


    for ($i = 0; $i < count($arr); $i++) {

        echo "Item: {$arr[$i]} <br>";
    }

?>