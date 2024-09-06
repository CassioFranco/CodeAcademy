<?php

    function alterardados($nome, $idade){

        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return[$nome,$idade];
    }

    $dados = alterardados("Cássio", 22);

    print_r($dados);

    echo "\n";

    echo "olá $dados[0], você tem $dados[1] anos";