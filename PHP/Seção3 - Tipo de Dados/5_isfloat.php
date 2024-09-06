<?php
    
    $a = "teste";
    $b = 12.8;

    if(is_float($a)) {
        echo "É float!";
        echo "\n";
    }

    if(is_float($b)) {
        echo "É float! 2";
        echo "\n";
    }

    if(is_float(1281981.10291)) {
        echo "É float! 3";
        echo "\n";
    }

    if(is_float("jacare")) {
        echo "É float! 4";
        echo "\n";
    }