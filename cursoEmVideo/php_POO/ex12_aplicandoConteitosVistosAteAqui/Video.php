<?php
require_once "AcoesVideo.php";
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    public function play() {
        if ($this -> getReproduzindo()) {
            echo "<p>O vídeo já esta em reprodução</p>";
        } else {
            $this -> setReproduzindo(true);
            echo "<p>Reproduzindo</p>";
        }
    }
    public function pause() {
        if ($this -> getReproduzindo()) {
            $this -> setReproduzindo(false);
            echo "<p>Vídeo Pausado</p>";
        } else {
            echo "<p>O vídeo não está sendo reproduzido para pausar</p>";
        }
    }
    public function like() {
        $this -> setCurtidas($this -> getCurtidas() + 1);
    }
    public function __construct($titulo) {
        $this -> setTitulo($titulo);
        $this -> setAvaliacao(0);
        $this -> setViews(1);
        $this -> setCurtidas(0);
        $this -> setReproduzindo(false);
    }
    public function setTitulo($titulo) {
        $this -> titulo = $titulo;
    }
    public function setAvaliacao($avaliacao) {
        $this -> avaliacao = ($this -> avaliacao + $avaliacao) / 2;
    }
    public function setViews($views) {
        $this -> views = $views;
    }
    public function setCurtidas($curtidas) {
        $this -> curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo) {
        $this -> reproduzindo = $reproduzindo;
    }
    public function getTitulo() {
        return $this -> titulo;
    }
    public function getAvaliacao() {
        return $this -> avaliacao;
    }
    public function getViews() {
        return $this -> views;
    }
    public function getCurtidas() {
        return $this -> curtidas;
    }
    public function getReproduzindo() {
        return $this -> reproduzindo;
    }
}