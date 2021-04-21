<?php
require_once "Pessoa.php";
//Essa classe possui filhos, caso não deseje que essa possua descendentes, basta adicionar a palavra "final".
class Aluno extends Pessoa {
    //Atributos;
    private $matricula;
    private $curso;
    //Métodos
    public function pagarMensalidade() { //Esse método esta sendo sobreposto, para que isso não ocorra, basta adicionar a palavra "final"
        echo "<p>Pagando mensalidade do aluno {$this-> nome} </p>";
    }
    //Métodos especiais
    public function getMatricula() {
        return $this -> matricula;
    }
    public function getCurso() {
        return $this -> curso;
    }
    public function setMatricula($matricula) {
        $this -> matricula = $matricula;
    }
    public function setCurso($curso) {
        $this -> curso = $curso;
    }
}
