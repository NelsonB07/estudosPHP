<?php 

    $str = "Esta é a minha string.";

    $minha = substr($str, 10, 5); // String Pai, Indice inicial, Comprimento da palavra.

    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "Testando esta string abc"; 

    $novaString = substr($str2, 8); // Omitir comprimento = Pegar até o fim.

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8, -3); // Comprimento negativo = Remover do último índice.

    echo $novaString2 . "<br>"; 


?>