<?php 



    $dataNascimento = mktime(02, 12, 33, 04, 05, 1998);
    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
    echo $dataNascimentoFormatada . "<br>";

    $dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);
    $dataFuturaFormatada = date('d/m/Y', $dataEspecifica);
    echo $dataFuturaFormatada . "<br>"; 








?>