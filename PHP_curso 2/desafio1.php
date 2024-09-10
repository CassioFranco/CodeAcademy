<?php

    class Data{

        public $dia = 01;
        public $mes = 01;
        public $ano = 1970;

        public function datacompleta(){
            echo "Dia:{$this->dia} Mês:{$this->mes} Ano:{$this->ano} \n";
            echo "{$this->dia}/{$this->mes}/{$this->ano} \n";
        }

    }


    $data1 = new Data();
    $data1 -> dia = 28;
    $data1 -> mes = "05";
    $data1 -> ano = 2002;

    echo $data1 ->datacompleta();