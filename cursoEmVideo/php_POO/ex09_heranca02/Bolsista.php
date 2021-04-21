<?php
require_once "Aluno.php";
final class Bolsista extends Aluno {
    //Atributos
    private $bolsa;
    //Métodos
    public function renovarBolsa() {
        echo "<p>Renovando bolsa do aluno {$this-> nome} </p>";
    }
    //Método sobreposto
    public function pagarMensalidade() {
        echo "<p>{$this-> nome} possui bolsa de ". $this -> getBolsa() * 100 ."% </p>";
    }
    //Métodos especiais
    public function getBolsa() {
        return $this -> bolsa;
    }
    public function setBolsa($bolsa) {
        $this -> bolsa = $bolsa;
    }
}
