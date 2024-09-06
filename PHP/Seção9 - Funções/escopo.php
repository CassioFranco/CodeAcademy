<?php

    $a = 10;
    $b =15;

    function escopo(){

        $a=5;

        global $b;

        $a++;

        $b++;

        echo "escopo local de a: $a . \n ";
        echo "escopo global dentro da função B: $b";

    }

    echo "escopo global de a: $a . \n";
    echo "escopo global de b: $b . \n";

    escopo();

    echo "escopo global de b2: $b . \n";