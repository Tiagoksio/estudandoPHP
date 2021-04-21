<?php
//Classe abstrata não pode ser instanciada
abstract class Pessoa {
    //Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    //Métodos
    public final function fazerAniv() {
        $this -> idade++;
    }
    //Métodos especiais
    public function getNome() {
        return $this -> nome;
    }
    public function getIdade() {
        return $this -> idade;
    }
    public function getSexo() {
        return $this -> sexo;
    }
    public function setNome($nome) {
        $this -> nome = $nome;
    }
    public function setIdade($idade) {
        $this -> idade = $idade;
    }
    public function setSexo($sexo) {
        $this -> sexo = $sexo;
    }
}
