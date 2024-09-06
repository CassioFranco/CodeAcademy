<?php

    function teste(){
        $a = 0;
        $a++;
        echo "$a";
        echo "\n";
    }
    teste();

    function testestatic(){
        static $a =0;
        $a++;

        echo "$a";
        echo "\n";
        
    }

    testestatic();
    testestatic();
    testestatic();