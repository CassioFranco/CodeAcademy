<?php

    // em php temos alguns métodos que nos ajudam a entender melhores os objetos;
    // is_objeto() => verefica se uma variável é um objeto;
    // get_class() => verifica a classe de um objeto;
    // method_exists() => verefica se um método existe em um obejeto;


    class Humano{
        public function falar(){
            echo "Olá \n";
        }

    }

    $cassio = new Humano;
    $teste = 10;

    if (is_object($cassio)){
        echo "É um objeto \n";
    }else{
        echo "não é um objeto \n";
    }

    if(is_object($teste)){
        echo "é um obejto \n";
    }else{
        echo "não é um obejto \n";
    }

    echo get_class($cassio) . "\n";

    if(method_exists($cassio, "falar")){
        echo "é um metodo";
    }else{
        echo "não exite \n";
    }

    