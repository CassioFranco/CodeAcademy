<?php

    $str1= "esta string é muito grande";
    $str2 = "esta nao";

    echo strlen($str1) . "\n";
    echo strlen($str2) . "\n";

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if($len1 > $len2){
        echo "A string 1 é maior que a string 2";
    }else{
        echo "A string 2 é maior que a string 1";
    }