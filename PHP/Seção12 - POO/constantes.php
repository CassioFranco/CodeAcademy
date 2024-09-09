<?php

    class Humano{
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarconstante(){
            echo self::BRACOS . "\n";
        }

    }

    $cassio = new Humano;

    echo $cassio::OLHOS . "\n";

    $cassio -> mostrarconstante();