<?php 


    class Humano {

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAs = 2;

        function mostrarConstantes() {
            echo self::BRACOS . "<br>";
        }
    }

    $nelson = new Humano;
    echo $nelson::OLHOS . "<br>";

    $nelson->mostrarConstantes();









?>