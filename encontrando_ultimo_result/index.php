<?php 



$str = "Testando encontrando palavra teste, em uma string que tem teste";

$palavra = strrpos($str, "teste");
echo "{$palavra} <br>";

$palavra2 = strpos($str, "teste");
echo $palavra2 . "<br>";

if(strrpos($str, "Java") === false) {
    echo "Palavra Java, não encontrada. <br>";
}

$p = substr($str, strpos($str, "teste"), 5);
echo $p;








?>