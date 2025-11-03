<?php 

    class Pessoa {

        public $nome;
        public $idade;

        function andar($m) {
            echo "A pessoa andou $m metros. <br>"; 
        }
    }

    $nelson = new Pessoa;

    $nelson->nome = "Nelson";
    $nelson->idade = 27;

    echo "O nome dele é $nelson->nome e tem $nelson->idade anos. <br>";
    
    $nelson->andar(20);
    
    $joaquim = new Pessoa;
    $joaquim->nome = "Joaquim";
    $joaquim->idade = 20;
    
    echo "O nome dele é $joaquim->nome e tem $joaquim->idade anos. <br>";
    
    $joaquim->andar(30);


?>