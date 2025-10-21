<?php 

    $lista = [
        "Arroz",
        "Feijão",
        "Batata",
        "Macarrão",
        "Cebola"
    ];

    function listaParaString($arr) {

        $str = "Você levou estes itens no mercado: ";

        for ($i = 0; $i < count($arr); $i++) {

            if ($i + 1 == count($arr)) {
                $str .= "$arr[$i].";
            } else {
                $str .= "$arr[$i], ";
            }

        }

        return $str;

    }


    echo listaParaString($lista); 


    



?>