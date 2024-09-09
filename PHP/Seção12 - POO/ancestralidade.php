<?php

    // para chegar a ancestralidade de uma classe usamos o "instanceof"

    class Humano{

    }

    class Animal{


    }

    class Professor extends Humano{


    }

    $marcos = new Humano;
    $turca = new Animal;
    $pedro = new Professor;


    if($marcos instanceof Humano){
        echo "marcos é um humano \n";
    }else {
        echo "marcos não é um humano \n";
    }

    if($turca instanceof Humano){
        echo "marcos é um humano \n";
    }else {
        echo "a turca não é um humano \n";
    }



    if($pedro instanceof Humano){
        echo "pedro é um humano\n";
    }else {
        echo "pedro não é um humano \n";
    }

    if($pedro instanceof Professor){
        echo "pedro é um Professor \n";
    }else {
        echo "pedro não é um professor \n";
    }