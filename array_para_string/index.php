<?php 


    $arr = [
        "Maçã",
        "Pera",
        "Mamão",
        "Banana",
        "Melancia"
    ];

    $str = implode(", ", $arr);
    echo "{$str}<br>";

    $arr2 = [
        "Carro",
        "Avião",
        "Barco",
        "Jangada",
        "Helicópetero."
    ];

    $str2 = implode(" | ", $arr2);
    echo $str2;







?>