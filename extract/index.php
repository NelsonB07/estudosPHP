<?php 


    $arr = [
        "cor" => "vermelho",
        "forma" => "retangular",
        "material" => "aço"
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = "Nelson";

    $pessoa = [
        "nome" => "Junior",
        "idade" => 27
    ];

    echo "$nome <br>";

    extract($pessoa);

    echo "$nome <br>";
    echo "$idade <br>";

   













?>