<?php 


    function soma($n1, $n2) {

        return $n1 + $n2; 

    }

    echo soma(10, 20) . "<br>";

    $x = soma(2, 4);

    echo $x . "<br>"; 

    $y = soma($x, 19);

    echo $y . "<br>";

    function testeRetorno() {

        echo "Testando";

    }

    $z = testeRetorno(); 
    echo $z . "<br>"; 




?>