<?php 


    class Humano {

        public $maos = 2;
        public $pernas =2;

        public function falar() {
            echo "Olá, eu sou Humano! <br>";
        }
    }
    
    class Professor extends Humano{

        public $disciplina = "Matemática";
        public function estaLecionando() {
            echo "O professor está dando aula de $this->disciplina! <br>";
        }
    }

    $marcos = new Humano;
    echo "$marcos->maos <br>";
    $marcos->falar();

    $nelson = new Professor;
    echo "$nelson->pernas <br>";
    echo "$nelson->disciplina <br>";

    $nelson->falar();
    $nelson->estaLecionando();


?>