<?php

    // classes abstratas não podem ser instanciadas;
    // podemos ter métodos abstratos que devem ser implementados obrigatoriamnete se uma classe herdar a abstrata;
    // usa-se "abstract" abstract class ClasseAbstrata{};

    abstract class Teste{

        public static function testandoclasse(){
            echo "esse metodo é uma classe abstrata \n";
        }

        abstract public function testeabs();
    }

    // $t = new Teste;

    Teste::testandoclasse();

    class Nova extends Teste{
        public function testeAbs(){
            echo "teste método abstrato \n";
        }

    }

    $n = new Nova;
    $n -> testeabs();