<?php
require_once "Pessoa.php";
class Funcionario extends Pessoa {
    //Atributos
    private $setor;
    private $trabalhando;
    //Métodos
    public function mudarTrabalho() {
        $this -> setTrabalhando(!$this -> getTrabalhando());
    }
    //Métodos especiais
    public function getSetor() {
        return $this -> setor;
    }
    public function setSetor($setor) {
        $this -> setor = $setor;
    }
    public function getTrabalhando() {
        return $this -> trabalhando;
    }
    public function setTrabalhando($trab) {
        $this -> trabalhando = $trab;
    }
}
