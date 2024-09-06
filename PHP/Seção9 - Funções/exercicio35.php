<?php

    function verificar($num){

        $resto= $num % 2;
        

        if($resto == 1){
            echo "$num é ímpar \n";
        }else{
            echo "$num é par \n";
        }


    }


    verificar(55);
    verificar(10);
    verificar(13);
    verificar(72);