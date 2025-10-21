<?php 


    $arr = [
        "nome" => "Nelson",
        "idade" => 27
    ];

    if (array_key_exists("nome", $arr)) {

        echo "A chave existe. <br>";

    } else {
        echo "A chave não existe.";
    }

    if (array_key_exists("sobrenome", $arr)) {

        echo "A chave existe. <br>";

    } else {
        echo "A chave não existe. <br>";
    }

    if (isset($arr["nome"])) {

        echo "A chave existe. ISSET<br>";
    } else {
        echo "A chave não existe. <br>";
    }

    if (isset($arr["sobrenome"])) {

        echo "A chave existe. <br>";
    } else {
        echo "A chave não existe. ISSET <br>";
    }

    $x = 10;
    if (isset($x)) {

        echo "A variável existe. ISSET <br>";
    } else {
        echo "A variável não existe. ISSET <br>";
    }









?>