<?php

    // As traits permitem o reuso do código sem hirarquia de classes, ou seja, sem hereança;
    // podemos assim utilizar os metódos da classe que foi feita a trait;
    // usando "use" class Teste{use ClasseTrait}

    trait Objeto {

        public function teste(){
            echo "testando trait de objeto \n";
        }

    }

    trait Testando{

        public function traitTeste(){
            echo "esse método é da trait testando \n";
        }

    }


    class Central {

        use Objeto;
        use Testando;

    }

    $x = new Central;

    $x -> teste();

    $x-> traitTeste();