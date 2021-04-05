<?php
//Declarando a classe Caneta
Class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    function rabiscar() {
        if ($this->tampada == true) {
            echo "Para rabiscar, primeiro é necessário destampar a caneta!<br>"; 
        } else {
            echo "Estou rabiscando...<br>";
        }
    }
    function tampar() {
        if ($this->tampada == true) {
            echo "A caneta já está tampada<br>";
        } else {
            $this->tampada = true;
            echo "A Caneta foi tampada.<br>";
        }
    }
    function destampar() {
        if ($this->tampada == false) {
            echo "A caneta já está destampada<br>";
        } else {
            $this->tampada = false;
            echo "A Caneta foi destampada.";
        }

    }
}