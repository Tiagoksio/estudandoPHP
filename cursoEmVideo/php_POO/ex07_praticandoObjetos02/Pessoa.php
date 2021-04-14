<?php
class Pessoa {
    //Atributos
    private $nome;
    private $idade;
    private $sexo;
    //Métodos Especiais
    public function __construct($nome, $idade, $sexo) {
        $this -> setNome($nome);
        $this -> setIdade($idade);
        $this -> setSexo($sexo);
    }
    public function getNome() {
        return $this -> nome; 
    }
    public function setNome($nome) {
        $this -> nome = $nome;
    }
    public function getIdade() {
        return $this -> idade = $idade;
    }
    public function setIdade($idade) {
        $this -> idade = $idade;
    }
    public function getSexo() {
        return $this -> sexo;
    }
    public function setSexo($sexo) {
        $this -> sexo = $sexo;
    }
    //Métodos
    public function fazerAniver() {
        $this -> idade ++;

    }
}
?>
