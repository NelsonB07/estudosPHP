<?php 

    class Humano {

        public function falar() {
            echo "Olá";
        }
    }

    $nelson = new Humano;

    $teste = 10;

    if (is_object($nelson)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if (is_object($teste)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($nelson) . "<br>"; 

    if (method_exists($nelson, "falar")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe";
    }

    if (method_exists($nelson, "aaa")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe";
    }


?>