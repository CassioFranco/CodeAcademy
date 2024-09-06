<?php

    $a = 10;

    while($a > 0){
        if($a == 5 || $a == 7){
            echo "pulou a execução $a \n";

            $a--;

            continue;
        }
        echo "executando o loop $a \n";

        if($a == 2){

            echo "terminando o loop breack $a \n";

            break;
        }

        $a--;
    }