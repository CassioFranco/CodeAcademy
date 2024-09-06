<?php

    $arr = [
        'porta' => 100,
        'macaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8,
    ];

    function itenscaros($arr){

        $arritenscaros = [];
        
        foreach($arr as $item => $preco){

        if($preco > 10){

        array_push($arritenscaros,$item);

        }
    }

    return $arritenscaros;

    }

    $novoarr = itenscaros($arr);

    print_r($novoarr);