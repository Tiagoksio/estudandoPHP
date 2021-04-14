<?php
require_once "Pessoa.php";
class Professor extends Pessoa {
    //Atributos
    private $especialidade;
    private $salario;
    //Métodos
    public function receberAum($aum) {
        $this -> setSalario($this -> getSalario() + $aum);
    }
    //Métodos especiais
    public function getEspecialidade() {
        return $this -> especialidade;
    }
    public function setEspecialidade($espec) {
        $this -> especialidade = $espec;
    }
    public function getSalario() {
        return $this -> salario;
    }
    public function setSalario($sal) {
        $this -> salario = $sal;
    }
}
