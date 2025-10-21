<?php 



    $arr = [
        "Banana",
        "Maçã",
        "Batata",
        "Pêra",
        "Mamão"
    ];

    $b = "Banana";

    if(in_array("Batata", $arr)) {
        echo "Há o item batata no array <br>";
    } else {
        echo "Não há batata no array <br>";
    }

    if(in_array($b, $arr)) {
        echo "Há o item batata no array <br>";
    } else {
        echo "Não há batata no array <br>";
    }

    if(in_array("teste", $arr)) {
        echo "Há o item teste no array <br>";
    } else {
        echo "Não há item teste no array <br>";
    }
    









?>