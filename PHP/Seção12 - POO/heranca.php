<?php

    // a herança e atribuida atraves de "extends"
    // class Programador extends Humano{}


    class Humano {

        public $idade = 29;
        
        public function falar(){
            echo "Hello World! \n";
        }
    
        private function gritar(){
            echo "PHP é muito bom! \n";
        }

        public function acessargritar(){
            $this->gritar();
        }

        protected function falarbaixinho(){

            echo "lalala \n";

        }

        public function acessafalarbaixinho(){
            $this->falarbaixinho();

        }


    }

    class Programador extends Humano{
        public function acessafalarbaixinhoprogramador(){
            $this->falarbaixinho();

        }

    }

    $ze = new Humano;
    $ze -> falar();
    $ze -> acessargritar();
    $ze -> acessafalarbaixinho();

    $cassio = new Programador;
    echo $cassio->idade . "\n";
    $cassio->falar();
    $cassio -> acessargritar();
    $cassio -> acessafalarbaixinhoprogramador();