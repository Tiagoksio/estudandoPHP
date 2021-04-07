<?php
class Conta{
    //Atributos
    private $titular;
    private $numConta;
    private $tipo;
    private $saldo;
    //Métodos
    public function saque($valor) {
        $this -> setSaldo(-$valor);
        return $this -> getSaldo();
    }
    public function deposito($valor){
        $this -> setSaldo($valor);
        return $this -> getSaldo();

    }
    public function encerrarConta($valor) {

    }
    //Métodos especiais
    public function Conta($nome, $numConta, $tipo) {
        $this -> setTitular($nome);
        $this -> setNumConta($numConta);
        $this -> setTipo($tipo);
        $this -> saldo = 0;
    }
    private function setTitular($nome) {
        $this -> titular = $nome;
    }
    public function getTitular() {
        return $this -> titular;
    }
    public function getTipo() {
        return $this -> tipo;
    }
    private function setTipo($tipo) {
        if ($tipo == "cc") {
            $this -> tipo = "cc";
        } else {
            $this -> tipo = "cp";
        }
    }
    private function setNumConta($numConta) {
        $this -> numConta = $numConta;
    }
    public function getNumConta() {
        return $this -> numConta;
    }
    private function setSaldo($valor) {
        return $this -> saldo += $valor;
    }
    public function getSaldo() {
        return $this -> saldo;
    }
}