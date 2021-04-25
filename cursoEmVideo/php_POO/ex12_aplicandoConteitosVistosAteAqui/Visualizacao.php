<?php
require_once "Video.php";
require_once "Gafanhoto.php";
class Visualizacao {
    private $espectador;
    private $filme;
    public function avaliar() {
        $this -> filme -> setAvaliacao(5);
    }
    public function avaliarNota($nota) {
        $this -> filme -> setAvaliacao($nota);
    }
    public function avaliarPorcentagem($porcentagem) {
        $nota = 0;
        if ($porcentagem <= 20) {
            $nota = 3;
        } elseif ($porcentagem <= 50) {
            $nota = 5;
        } elseif ($porcentagem <= 90) {
            $nota = 8;
        } else {
            $nota = 10;
        }
        $this -> filme -> setAvaliacao($nota);
    }
    public function __construct($espectador, $filme) {
        $this -> setEspectador($espectador);
        $this -> setFilme($filme);
        $this -> filme -> setViews($this -> filme -> getViews() + 1);
        $this -> espectador -> viuMaisUm();
    }
    public function setEspectador($espectador) {
        $this -> espectador = $espectador;
    }
    public function setFilme($filme) {
        $this -> filme = $filme;
    }
    public function getEspectador() {
        return $this -> espectador;
    }
    public function getFilme() {
        return $this -> filme;
    }
}