<?php 


    class Pessoa {

        function falar() {
            echo "Olá, eu sou um objeto! <br>";
        }

        function somar($x, $y) {

            echo $x + $y .  "<br>";
        }
    } 

    $nelson = new Pessoa;

    $nelson->falar();
    $nelson->falar();

    $joao = new Pessoa;
    $joao->falar();

    $nelson->somar(10, 10);
    $joao->somar(20, 20);











?>