<?php 

    interface Caracteristicas {

        const nome = "Nelson";

        public function falar(); 
    }

    class Humano implements Caracteristicas {

        public $idade = 29;
        public function falar() {
            echo "Olá, mundo! <br>";
        }

        public function dizerNome() {
            echo "Meu nome é " . self::nome . "!<br>";
        }
    }

    $nelson = new Humano; 
    $nelson->falar();
    $nelson->dizerNome();
    




?>