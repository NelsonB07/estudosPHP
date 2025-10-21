<?php 


    function soma($a, $b) {
        print_r(func_get_args());

        echo "<br>";

        echo func_num_args() . "<br>";

        return $a + $b;
    }

    echo soma(10, 10, 5, 3);






?>