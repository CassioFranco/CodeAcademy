<?php

    function definircor($cor = "vermelha"){

        return "A cor do carro é: $cor";
    }

    $carrovermelho = definircor();
    echo $carrovermelho . "\n";

    $carroazul = definircor("azul");
    echo $carroazul . "\n";