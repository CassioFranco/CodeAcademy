<?php

    $arr = [5, "cássio", true, false, "opa", 12.8, "teste", true, [], "palavra", 5,10,"alô"];
    $x = count ($arr);
    $y = 0;


    while ($y < $x){
    if(is_string($arr[$y])){
        echo $arr[$y] . "\n";
    }

    $y++;
    }