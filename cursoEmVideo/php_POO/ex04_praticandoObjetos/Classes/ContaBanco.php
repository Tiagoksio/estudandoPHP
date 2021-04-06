<?php
class ContaBanco {
    private $titular;
    public $numConta;
    private $senha;
    private $saldo;
    public $tipo;
    private $tarifa;
    
    public function ContaBanco($nome, $senha, $tipo) {
        $this -> setTitular($nome);
        $this -> setSenha($senha);
        $this -> saldo = 0;
        $this -> setTipo($tipo);
        $this -> setTarifa($this->tipo);
    }
    public function getTitular() {
        return $this -> titular;
    }
    public function setTitular($n) {
        return $this -> titular = $n;
    }
    public function getNumConta() {
        return $this -> numConta;
    }
    public function setNumConta($nc) {
        return $this -> numConta = $nc;
    }
    private function getSenha() {
        return $this -> senha;
    }
    public function setSenha($s) {
        return $this -> senha = $s;
    }
    private function getSaldo() {
        return $this -> saldo;
    }
    private function setSaldo($valor) {
        return $this -> saldo = getSaldo() + $valor;
    }
    protected function setSaque($valor) {
        if ($valor < getSaldo()) {
            echo "Saldo Insuficiente<br>";
        } else {
            $this -> setSaldo(-$valor);
        }
    }
    protected function setDeposito($valor) {
        $this -> setSaldo($valor);
    }
    private function getTipo() {
        return $this -> tipo;
    }
    private function setTipo($tp) {
        if ($tp == "cc") {
            $this -> tipo = "cc";
        } else {
            $this -> tipo = "cp";
        }
    }
    private function setTarifa($tp) {
        if ($this -> tipo == "cc") {
            $this -> setSaldo(-50);
        } else {
            $this -> setSaldo(-20);
        }
    }
}
