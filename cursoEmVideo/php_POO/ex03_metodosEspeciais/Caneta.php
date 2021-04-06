<?php
class Caneta {
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function Caneta($m, $c, $p) {
        $this -> modelo = $m;
        $this -> cor = $c;
        $this -> ponta = $p;
        $this -> tampar();
    }
    public function getModelo() {
        return $this -> modelo;
    }
    public function setModelo($mod) {
        return $this -> modelo = $mod;
    }
    public function getPonta() {
        return $this -> ponta;
    }
    public function setPonta($pont) {
        return $this -> ponta = $pont;
    }
    public function getCor() {
        return $this -> cor;
    }
    public function setCor($c) {
        return $this -> cor = $c;
    }
    public function getTampada() {
        if ($this -> tampada == true) {
            return "tampada";
        } else {
            return "destampada";
        }
    }
    public function tampar() {
        $this -> tampada = true;
    }
}