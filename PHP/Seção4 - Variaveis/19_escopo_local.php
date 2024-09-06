<?php
    $x =10;

    echo "$x global";
    echo "\n";

    function teste(){
        $x=5;
        echo "$x local";
        echo "\n";
    }

    teste();
    echo "$x global";
    echo "\n";

    function testando(){
        $x =12;
        echo "$x local 2";
        echo "\n";
    }

    $x =99;

    testando();
    teste();

    echo "$x global";
    echo "\n";