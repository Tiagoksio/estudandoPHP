<?php
//Declarando a classe Caneta com visibilidade definida
Class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    public function rabiscar() {
        if ($this->tampada == true) {
            echo "Para rabiscar, primeiro é necessário destampar a caneta!<br>"; 
        } else {
            echo "Estou rabiscando...<br>";
        }
    }
    public function tampar() {
        if ($this->tampada == true) {
            echo "A caneta já está tampada<br>";
        } else {
            $this->tampada = true;
            echo "A Caneta foi tampada.<br>";
        }
    }
    public function destampar() {
        if ($this->tampada == false) {
            echo "A caneta já está destampada<br>";
        } else {
            $this->tampada = false;
            echo "A Caneta foi destampada.";
        }

    }
}