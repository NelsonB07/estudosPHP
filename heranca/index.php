<?php 


    class Humano {

        public $idade = 29;

        public function falar() {
            echo "Olá, Mundo! <br>";
        }
        private function gritar() {
            echo "PHP É MUITO BOM! <br>";
        }
        public function acessaGritar() {
            $this->gritar();
        }
        protected function falarBaixinho() {
            echo "lalala <br>";
        }
        public function acessaBaixinho() {
            $this->falarBaixinho();
        }
    }


    class Programador extends Humano {

        public function acessaFalarBaixihoProgramador() {
            $this->falarBaixinho();
        }

    }

    $ze = new Humano;
    $ze->falar();
    $ze->acessaGritar();
    $ze->acessaBaixinho();
    
    $nelson = new Programador;
    echo $nelson->idade . "<br>";
    $nelson->falar();
    $nelson->acessaGritar();
    $nelson->acessaFalarBaixihoProgramador();






?>