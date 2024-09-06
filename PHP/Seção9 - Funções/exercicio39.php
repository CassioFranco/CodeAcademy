<?php

    $lista = ["arroz", "trigo", "cerveja", "sal", "vinagre"];

    function listaString($arr){

        $str = "voce levou estes itens do mercado: ";

        for($i = 0; $i < count($arr); $i++){

            if($i + 1 == count($arr)){
                $str .= "$arr[$i].";
            } else{
                $str .= "$arr[$i], ";
            }

        }

        return $str;

    }

    echo listaString($lista);