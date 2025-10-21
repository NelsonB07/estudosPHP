
<?php 

$j = 0;

$teste = "Nelson"; 

do {
    echo "Testando o do while $j <br>"; 

    $j++;

    if ($j == 2) {
        echo "$teste <br>"; 
    }


} while ($j < 10);


$i = 10; 

do {

    echo "Testando do while 2 $i <br>";

    $i--;

      if ($i == 2) {
        echo "$teste <br>"; 
    }


} while ($i > 0); 

?>