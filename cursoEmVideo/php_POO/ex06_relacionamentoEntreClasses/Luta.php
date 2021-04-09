<?php
require_once "Lutador.php";
class Luta {
    //Atrobutos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    //Métodos
    public function marcarLuta($l1, $l2) {
        if ($l1 -> getCategoria() == $l2 -> getCategoria()) {
            echo "<p>Categorias de peso diferentes</p>";
            $this -> aprovada = false;
            $this -> setDesafiante(null);
            $this -> setDesafiado(null);
        } elseif ($l1 == $l2) {
            echo "<p>Um lutador não pode lutar consigo mesmo</p>";
            $this -> aprovada = false;
            $this -> setDesafiante(null);
            $this -> setDesafiado(null);
        } else {
            $this -> aprovada = true;
            $this -> setDesafiado($l1);
            $this -> setDesafiante($l2);
        }
    }
    public function lutar() {
        if ($this -> getAprovada()) {
            $this -> desafiado -> apresentar();
            $this -> desafiante -> apresentar();
            for ($i=1; $i <= 3; $i++) {
                $this -> setRounds($i);
                echo "<p>Round {$this -> getRounds()}</p>";
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0: //Empate
                        echo "<p>Empate!</p>";
                        $this -> desafiado -> empatarLuta();
                        $this -> desafiante -> empatarLuta();
                        break;
                    case 1: //Desafiado Vence
                        echo "<p>".strtoupper($this->desafiado->getNome())." VENCEU!</p>";
                        $this -> desafiado -> ganharLuta();
                        $this -> desafiante -> perderLuta();
                        break;
                    case 2; //Desafiante Vence
                        echo "<p>".strtoupper($this -> desafiante->getNome())." VENCEU!</p>";
                        $this -> desafiante -> ganharLuta();
                        $this -> desafiado -> perderLuta();
                        break;
                }
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }

    }
    //Métodos Especiais
    public function getDesafiado() {
        return $this -> desafiado;
    }
    public function getDesafiante() {
        return $this -> desafiante;
    }
    public function getRounds() {
        return $this -> rounds;
    }
    public function getAprovada() {
        return $this -> aprovada;
    }
    public function setDesafiado($desafiado) {
        $this -> desafiado = $desafiado;
    }
    public function setDesafiante($desafiante) {
        $this -> desafiante = $desafiante;
    }
    public function setRounds($rounds) {
        $this -> rounds = $rounds;
    }
    public function setAprovada($aprovada) {
        $this -> aprovada = $aprovada;
    }
}
?>
