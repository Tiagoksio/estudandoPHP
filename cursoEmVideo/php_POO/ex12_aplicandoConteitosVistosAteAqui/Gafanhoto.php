<?php
require_once "Pessoa.php";
class Gafanhoto extends Pessoa {
    private $login;
    private $totAssistido;
    public function viuMaisUm() {
        $this -> setTotAssistido($this -> getTotAssistido() + 1);
        $this -> setExperiencia($this -> getExperiencia() + 1);
    }
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);//sobrescrição no construct
        $this -> setLogin($login);
        $this -> setTotAssistido(0);
    }    
    public function setLogin($login) {
        $this -> login = $login;
    }
    public function setTotAssistido($totAssistido) {
        $this -> totAssistido = $totAssistido;
    }
    public function getLogin() {
        return $this -> login;
    }
    public function getTotAssistido() {
        return $this -> totAssistido;
    }
}