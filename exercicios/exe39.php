<?php 



    $arr = [
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8
    ];  
 
    function intenCaros($arr) {

        $arrItensCaros = []; 

        foreach($arr as $item => $preco) {

            if($preco > 10) {
                
                array_push($arrItensCaros, $item); 

            }
            
        }

        return $arrItensCaros;

    }

    $novoArr = intenCaros($arr); 

    print_r ($novoArr);
   




?>