<?php 


    $frase = "Testando o explode";

    $frasearray = explode(" ", $frase);
    
    print_r($frasearray);
    echo "<br>";

    $fraseArray2 = explode(",", $frase);

    print_r($fraseArray2);
    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";

    $fraseArrayB = explode(",", $fraseB);
    print_r($fraseArrayB);
    echo "<br>";


    for ($i = 0; $i < count($fraseArrayB); $i++) {
        echo "$fraseArrayB[$i] <br>";
    }

    

?>