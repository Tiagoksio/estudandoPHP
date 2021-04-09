<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //Métodos especiais
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this -> setTitulo($titulo);
        $this -> setAutor($Autor);
        $this -> setTotPaginas($totPaginas);
        $this -> setLeitor($leitor);
    }
    public function getTitulo() {
        return $this -> titulo;
    }
    public function setTitulo($titulo) {
        $this -> titulo = $titulo;
    }
    public function getAutor() {
        return $this -> titulo;
    }
    public function setAutor($autor) {
        $this -> autor = $autor;
    }
    public function getTotPaginas() {
        return $this -> titulo;
    }
    public function setTotPaginas($totPaginas) {
        $this -> totPaginas = $totPaginas;
    }
    public function getPagAtual() {
        return $this -> titulo;
    }
    public function setPagAtual($pagAtual) {
        $this -> pagAtual = $pagAtual;
    }
    public function getAberto() {
        return $this -> titulo;
    }
    public function setAberto($aberto) {
        $this -> aberto = $aberto;
    }
    public function getLeitor() {
        return $this -> titulo;
    }
    public function setLeitor($leitor) {
        $this -> leitor = $leitor;
    }
    //Métodos
    public function detalhes() {

    }
    //Implementação Interface
    public function abrir() {
        $this -> setAberto(true);
    }
    public function fechar() {
        $this -> setAberto(false);
    }
    public function folhear($p) {

    }
    public function avancarPag() {
        $this -> setPagAtual($this -> getPagAtual() + 1);
    }
    public function voltarPag() {
        $this -> setPagAtual($this -> getPagAtual() - 1);
    }
}
?>